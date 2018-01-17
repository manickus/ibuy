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
use Spatie\Activitylog\Models\Activity;


class AdController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {

      $activity = Activity::all()->last();
      dd($activity);
    
      $ads = Ad::where('active', 1)->latest()->paginate(9);


      return view('ad.index',compact('ads'));
    }


    public function create()
    {

      $activity = \Activity::all()->last();
      dd('kurwa');
      $categories = Category::pluck('name','id');

      return view('ad.create',compact('categories'));
    }


    public function store(AdsRequest $request)
    {


     
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
      $ad->active = 1;
      $ad->maxprice = $request->input('maxPrice');
      $ad->new = $newItem;
      $ad->phone = $phone;
      $ad->phone = $city;
      $ad->save();
      
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



      return redirect()->route('dashboard');

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
      $ad->addVisitThatExpiresAt(Carbon::now()->addHours(1));
      $user = User::find(Auth::user()->id);
      $favorite = $this->favorite_exits($ad->id,$user->id);
      return view('ad.show',[
        'ad' => $ad,
        'favorite' => $favorite,
        ]);
    }


    public function destroy(Ad $ad)
    {
      if(\Laratrust::hasRoleAndOwns('user', $ad)){
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
}
