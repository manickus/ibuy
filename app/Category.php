<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function menu()
    {
      return static::selectRaw('name, slug,icon')->get();
    }

    public function ads()
    {
      return $this->hasMany('App\Ad','category_id');
    }

    public function getRouteKeyName()
    {
      return 'slug';
    }


}
