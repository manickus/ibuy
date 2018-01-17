<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\ReplyMessage;
use Auth;

class MessageController extends Controller
{
    public function store(Request $request)
    {
      Message::create([
            'user_id'     => Auth::user()->id,
            'ad_id'    => $request->input('ad'),
            'body' =>  $request->input('body'),
      ]);



      return redirect()->back();
    }

    public function storereply(Request $request)
    {
      ReplyMessage::create([
            'user_id'     => Auth::user()->id,
            'message_id'     => $request->input('msg'),
            'ad_id'    => $request->input('ad'),
            'body' =>  $request->input('body'),
      ]);



      return redirect()->back();
    }

    public function show(Message $msg){

      return view('message.show',[
          'msg' => $msg,
        ]);
    }
}
