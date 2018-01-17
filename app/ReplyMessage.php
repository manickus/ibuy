<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReplyMessage extends Model
{
  protected $fillable = [
      'user_id', 'ad_id','body','message_id',
  ];

  public function message()
  {
    return $this->belongsTo('App\Message');
  }

}
