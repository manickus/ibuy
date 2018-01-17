<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdsRequest;
use App\Ad;
use App\User;
use App\Category;
use Carbon\Carbon;
use Auth;
use App\AdsPhoto;
use Illuminate\Support\Facades\DB;
use Jenssegers\Date\Date;
use Spatie\Activitylog\Models\Activity;
use App\AdType;


class AdController extends Controller
{

    public function __construct()
    {
 
      Carbon::setLocale('pl');
    }

    public function index()
    {


  


    
      $ads = Ad::where('active', 1)->latest()->paginate(9);


      return view('ad.index',compact('ads'));
    }


    public function create()
    {
      $categories = Category::pluck('name','id');
      $types = AdType::pluck('name','id');

      return view('ad.create',[
          'categories' => $categories,
          'types' => $types,
        ]);
    }


    public function store(AdsRequest $request)
    {

      $user = User::find(Auth::user()->id);
     if($request->input('new')==1)  $newItem = 1;
     else $newItem = 0;
     if($request->input('city'))  $city = $request->input('city');
     else $city = null;
     if($request->input('phone'))  $phone = $request->input('phone');
     else $phone = null;


      $ad = new Ad;
      $ad->user_id = Auth::user()->id;
      $ad->title = $request->input('title');
      $ad->body = $request->input('body');
      $ad->category_id = $request->input('category');
      $ad->ad_type = $request->input('ad_type');
      $ad->active = 1;
      $ad->maxprice = $request->input('maxPrice');
      $ad->new = $newItem;
      $ad->phone = $phone;
      $ad->city = $city;
      $ad->save();
      

      activity()
        ->performedOn($ad)
        ->causedBy($user)
        ->withProperties(['photos' => count($request->ad_photo)])
        ->log('Oferta  :subject.title, zostala dodana przez  :causer.name :causer.surname Liczba zdjec: :properties.photos');
      
      if(count($request->ad_photo) > 0) {
       foreach ($request->ad_photo as $photo) {
          if($photo) {
            $photoName = \Storage::disk('local')->putFile('adphoto',$photo);
          
            AdsPhoto::create([
                'ad_id' => $ad->id,
                'filename' => $photoName
            ]);
          }
        }
      }


      $request->session()->flash('status', 'Ogłoszenie zostało poprawnie dodane!');
      return redirect()->route('ad.show',$ad);

    }

    public function edit(Ad $ad)
    {
      $categories = Category::pluck('name','id');
      return view ('ad.edit',[
        'ad' => $ad,
        'categories' => $categories
        ]);
    }

    public function update(AdsRequest $request, Ad $ad)
    {
         if($request->input('new')==1)  $newItem = 1;
     else $newItem = 0;
     if($request->input('city'))  $city = $request->input('city');
     else $city = null;
     if($request->input('phone'))  $phone = $request->input('phone');
     else $phone = null;


      $ad->update([
        'title'    => $request->input('title'),
            'body' =>  $request->input('body'),
            'category_id' => $request->input('category'),
            'active' => 1,
            'maxprice' => $request->input('maxPrice'),
            'phone' => $phone,
            'city' => $city,
        ]);

      return redirect()->route('ad.show',$ad);
    }


    public function show(Ad $ad)
    {
              $categories = Category::menu();

      $ad->addVisitThatExpiresAt(Carbon::now()->addHours(1));
      if(!$ad->user->hasRole('user')) {
        $ad->user->attachRole('user');
      }


      if(Auth::check()) {
        // loged user
        $user = User::find(Auth::user()->id);
        // Add activity show ad

              activity()
        ->performedOn($ad)
        ->causedBy($user)
        ->log(':causer.name :causer.surname wszedł na oferte :subject.title' );

        // Add favorites if user is loged

        $user = User::find(Auth::user()->id);
        $favorite = $this->favorite_exits($ad->id,$user->id);
      } else {
        $favorite = false;
      }


      return view('ad.show',[
        'ad' => $ad,
        'favorite' => $favorite,
        'categories' => $categories,
        ]);
    }


    public function destroy(Ad $ad)
    {
      if(\Laratrust::hasRoleAndOwns('user', $ad)){
        if(count($ad->msgs)){
          foreach ($ad->msgs as $msg) {
           $msg->delete();
          }
        }
      $ad->delete();
      return redirect()->route('dashboard');
      }
    }


    public function favorites(Ad $ad) {
        $user = User::find(Auth::user()->id);

        if($this->favorite_exits($ad->id,$user->id)) {
          $user->favorites()->detach($ad->id);
        } else {
          $user->favorites()->attach($ad->id);
        }

        return redirect()->back();
    }


    private function favorite_exits($ad,$user)
    {
      return ! is_null(
        $exists = DB::table('favorites')
          ->where('ad_id',$ad)
          ->where('user_id',$user)
          ->first()
          );
    }


    public function updatePhotoAjax(Request $request)
    {

      $photoName = \Storage::disk('local')->putFile('adphoto',$request->file);
            $photo = AdsPhoto::create([
                'ad_id' => $request->id,
                'filename' => $photoName
            ]);


          return response(['data' => $photo], 200);
    }

     public function deletePhotoAjax(Request $request)
    {

      $photo = AdsPhoto::find($request->photoId);
      $photo->delete();
       return response(['data' => $request->photoId], 200);
    }
}
