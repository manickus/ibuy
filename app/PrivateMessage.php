<?php

namespace App;


use App\User;
use App\Ad;
use App\PrivateMessageReply;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class PrivateMessage extends Model
{
    protected $fillable = [
    	'sender_id', 'receiver_id', 'ad_id', 'message', 'read',
    ];


    protected $appends = ['sender', 'receiver'];



    public function reply()
    {
      return $this->hasMany('App\PrivateMessageReply','pm_id');
    }


    public function getCreatedAtAtrribute($value)
    {
    	return Carbon::parse($value)->diffForHumans();
    }


    public function getSenderAttribute()
    {
    	return User::where('id',$this->sender_id)->first();
    }

    public function getReceiverAtrribute() 
    {
    	return User::where('id',$this->receiver_id)->first();
    }


    public function getAdAtrribute()
    {
    	return Ad::where('id',$this->ad_id)->first();
    }


}
