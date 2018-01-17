<?php

namespace App\Http\Controllers;

use App\PrivateMessage;
use App\PrivateMessageReply;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class PrivateMessageController extends Controller
{

	public function __construct()
	{
		Carbon::setLocale('pl');
	}

	public function getUserNotifications(Request $request)
	{

		$notifications = PrivateMessage::where('read', 0)
		->where('receiver_id', Auth::user()->id)
		->orderBy('created_at','desc')
		->count();
		$notifications += PrivateMessageReply::where('read',0)
		->where('receiver_id',Auth::user()->id)
		->orderBy('created_at','desc')
		->count();
		return response(['data' => $notifications], 200);
	}


	public function getPrivateMessages(Request $request)
	{
	 	$pms = PrivateMessage::where('receiver_id',Auth::user()->id)
	 	->orWhere('sender_id',Auth::user()->id)
	 	->orderBy('created_at','desc')
	 	->get();


	 	return view('profile.messages',[
	 		'pms' => $pms,
	 		]);
	}

	public function showPrivateMessage(PrivateMessage $pm)
	{

		if($pm->read == 0 && $pm->receiver_id == Auth::user()->id)
		{
			$pm->read = 1;
			$pm->save();
	
		}

		if(count($pm->reply))
		{
			foreach ($pm->reply as $reply) {
				if($reply->read == 0 && $reply->receiver_id == Auth::user()->id)
				{
					$reply->read = 1;
					$reply->save();
			
				}
			}
		}
	 	return view('messages.show',[
	 		'pm' => $pm,
	 		]);
	}



	public function storeReply(Request $request)
	{
		$attributes = [
			'sender_id' => Auth::user()->id,
			'receiver_id' => $request->input('receiver_id'),
			'pm_id' => $request->input('pm_id'),
			'message' => $request->input('body'),
			'read' => 0,
		];


		$pm = PrivateMessageReply::create($attributes);
		return redirect()->back();
	}

	public function sendPrivateMessage(Request $request)
	{
		$attributes = [
			'sender_id' => Auth::user()->id,
			'receiver_id' => $request->input('receiver_id'),
			'ad_id' => $request->input('ad_id'),
			'message' => $request->input('body'),
			'read' => 0,
		];

		$pm = PrivateMessage::create($attributes);

	 return redirect()->route('dashboard');
	}


}
