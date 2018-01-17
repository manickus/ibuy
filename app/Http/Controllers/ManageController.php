<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Carbon\Carbon;
use App\Ad;
use App\User;

class ManageController extends Controller
{

  public function index() {

    return redirect()->route('manage.dashboard');
  }

  public function dashboard() {
  	Carbon::setLocale('pl');
  	$adCount = Ad::all()->count();
  	$userCount = User::all()->count();
  	$activity = Activity::all();
	

    return view('manage.dashboard',[
    		'adCount' => $adCount,
    		'activity' => $activity,
    		'userCount' => $userCount,
    	]);

  }

  public function users()
  {
  	Carbon::setLocale('pl');
  	$adCount = Ad::all()->count();
  	$userCount = User::all()->count();
  	$activity = Activity::all();
	$users =  User::latest()->paginate(3);

    return view('manage.users',[
    		'adCount' => $adCount,
    		'activity' => $activity,
    		'userCount' => $userCount,
    		'users' => $users,
    	]);
	}


}
