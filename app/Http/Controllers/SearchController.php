<?php

namespace App\Http\Controllers;



use App\Ad;
use Illuminate\Http\Request;
use App\Category;


class SearchController extends Controller
{
    public function show(Request $request)
    {
      $s = $request->input('search');

      $ads = Ad::search($s)->paginate(9);

      return view('search.show',['ads' => $ads,
                                  's' => $s]);
    }


    public function category(Request $request)
    {


    	$s = $request->input('s');
    	$lowPrice = $request->input('lowprice');
    	$highPrice = $request->input('highprice');
    	$category = $request->input('category');
    	$city = $request->input('city');
     
    	$ads = Ad::search($s)->get();
        if($lowPrice) {
            $ads = $ads->filter(function($value,$key) use ($lowPrice) {
                    return $value['maxprice'] >= intval($lowPrice);
                  });
        }
        if($highPrice)
        {
              $ads = $ads->filter(function($value,$key) use ($highPrice) {
                    return $value['maxprice'] <= intval($highPrice);
                  });
        }
         if($city)
        {
              $ads = $ads->filter(function($value,$key) use ($city) {
                    return $value['city'] == $city;
                  });
        }


        $ads->paginate(9);
    	
    	
 	
    	 $categories = Category::pluck('name','id');
         function paginate($items, $perPage = 15, $page = null, $options = [])
        {
            $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
            $items = $items instanceof Collection ? $items : Collection::make($items);
            return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
        }

    	return view('search.category', [
    			'city' => $city,
    			'ads' => $ads,
    			'lowPrice' => $lowPrice,
    			'highPrice' => $highPrice,
    			'category' => $category,
    			's' => $s,
    			'categories' => $categories,
    		]);
    }
}
