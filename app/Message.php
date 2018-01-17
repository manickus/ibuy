<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
  protected $fillable = [
      'user_id', 'ad_id','body',
  ];

  public function replymsgs()
  {
    return $this->hasMany('App\ReplyMessage','message_id');
  }

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function ad()
  {
    return $this->belongsTo('App\Ad');
  }


}
