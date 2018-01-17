<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivateMessageReply extends Model
{
    protected $fillable = [
    	'sender_id', 'receiver_id', 'pm_id', 'message', 'read',
    ];


    protected $appends = ['sender', 'receiver'];


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


}
