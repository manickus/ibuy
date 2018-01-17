<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Cyrildewit\PageVisitsCounter\Traits\HasPageVisitsCounter;
use Carbon\Carbon;
use App\PrivateMessage;
use Laravel\Scout\Searchable;


class Ad extends Model
{

    use HasPageVisitsCounter;
    use Searchable;


  protected $fillable = ['title', 'body', 'user_id','new','active','category_id','maxprice','ad_img','phone','city','ad_type'];





    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function msgs()
    {
      return $this->hasMany('App\PrivateMessage','ad_id');
    }

    public function category()
    {
      return $this->belongsTo('App\Category');
    }

     public function type()
      {
      return $this->belongsTo('App\AdType','ad_type');
      }

    public function scopeSearch($query, $s)
    {
      return $query->where('title', 'like', '%' .$s. '%')
            ->orWhere('body', 'like', '%' .$s. '%');
    }

     public function photos()
    {
      return $this->hasMany('App\AdsPhoto','ad_id');
    }

    public function humanDate()
    {
      Carbon::setLocale('pl');
      return Carbon::instance($this->created_at)->diffForHumans();

    }

     public function favorites()
    {
        return $this->belongsToMany('App\User', 'favorites', 'ad_id', 'user_id');
    }

    
    public function getCreatedAtAttribute($value)
    {
        Carbon::setLocale('pl');
      return Carbon::parse($value)->diffForHumans();
    }


        public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }
}
