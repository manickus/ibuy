<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Ad;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $redirectTo = '/dashboard';
    
    public function __construct()
    {

      Carbon::setLocale('pl');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ads = Ad::all()->sortByDesc('page_visits_7d')->take(6);

        $randomAd = Ad::orderByRaw('RAND()')->take(1)->first();   
    
        return view('home.layout',[
                'ads' => $ads,
                'randomAd' => $randomAd,
            ]);
    }

    public function show()
    {
      return view('home.show');
    }


    public function aboutUs()
    {
        return view('home.about');
    }


    public function regulations()
    {
        return view('home.regulations');
    }
}
