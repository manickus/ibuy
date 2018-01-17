<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/', 'HomeController@index')->name('home')->middleware('guest');

Route::get('/about-us',[
  'uses' => 'HomeController@aboutUs',
  'as' => 'home.about',
  ]);

Route::get('/regulamin',[
  'uses' => 'HomeController@regulations',
  'as' => 'home.regulations',
  ]);

Route::get('/dashboard',[
  'uses' =>  'AdController@index',
  'as' => 'dashboard',
]);

Route::get('dashboard/ad/create', [
  'uses' => 'AdController@create',
  'as' => 'ad.create'
])->middleware('auth');

Route::get('dashboard/ad/show/{ad}',
[
  'uses' => 'AdController@show',
  'as' => 'ad.show'
]);

Route::post('dashboard/ad/store', [
  'uses' => 'AdController@store',
   'as' => 'ad.store'
])->middleware('auth');

Route::get('dashboard/ad/edit/{ad}', [
    'uses' => 'AdController@edit',
    'as' => 'ad.edit',

  ]);

Route::get('dashboard/ad/favorite/{ad}', [
    'uses' => 'AdController@favorites',
    'as' => 'ad.favorite',

  ])->middleware('auth');   

Route::put('dashboard/ad/update/{ad}',[
    'uses' => 'AdController@update',
    'as' => 'ad.update',
  ])->middleware('auth');

Route::delete('dashboard/ad/destroy/{ad}',[
    'uses' => 'AdController@destroy',
    'as' => 'ad.destroy',
  ])->middleware('auth');



/* Private message urls */

  Route::get('/get-private-message-notifications',[
    'uses' => 'PrivateMessageController@getUserNotifications',
    'as' => 'pm.notification'
  ]);

    Route::get('/get-private-messages',[
    'uses' => 'PrivateMessageController@getPrivateMessages',
    'as' => 'pm.messages'
  ]);

      Route::get('profile/message/{pm}',[
    'uses' => 'PrivateMessageController@showPrivateMessage',
    'as' => 'pm.show'
  ]);

        Route::post('/send-private-message',[
    'uses' => 'PrivateMessageController@sendPrivateMessage',
    'as' => 'pm.send'
  ]);



/* end private message urls */


/* Photos ad edit */

  Route::post('/update-photo-ajax',[
      'uses' => 'AdController@updatePhotoAjax',
      'as' => 'ajax.updatePhotoAd'
    ]);

   Route::post('/delete-photo-ajax',[
      'uses' => 'AdController@deletePhotoAjax',
      'as' => 'ajax.deletePhotoAd'
    ]);

/*end photos ad edot */



Route::prefix('manage')->middleware('role:superadministrator|administrator')->group(function () {


  Route::get('/','ManageController@index');
  Route::get('/dashboard',[
    'uses' => 'ManageController@dashboard',
    'as' => 'manage.dashboard'
  ]);

    Route::get('/users',[
    'uses' => 'ManageController@users',
    'as' => 'manage.users'
  ]);

});


Route::get('search',
[
  'uses' => 'SearchController@show',
  'as' => 'search.items',

]);

Route::get('items/search/',
[
  'uses' => 'SearchController@category',
  'as' => 'category.search',

]);

Route::get('category/{category}',
[
  'uses' => 'CategoryController@show',
  'as' => 'category.show'
]);



Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('login/facebook', [
  'uses' => 'Auth\RegisterController@redirectToProvider',
   'as' => 'login.facebook'
   ]);
Route::get('login/facebook/callback', 'Auth\RegisterController@handleProviderCallback');


Route::post('message/create',
[
  'uses' => 'MessageController@store',
  'as' => 'msg.store'
]);

Route::post('message/create/reply',
[
  'uses' => 'PrivateMessageController@storeReply',
  'as' => 'msg.reply'
]);


Route::get('profile/show',
[
  'uses' => 'ProfileController@show',
  'as' => 'profile.show',

])->middleware('auth');

Route::get('profile/messages',
[
  'uses' => 'PrivateMessageController@getPrivateMessages',
  'as' => 'profile.messages',

])->middleware('auth');

Route::get('profile/favorites',
[
  'uses' => 'ProfileController@favorites',
  'as' => 'profile.favorites',

])->middleware('auth');
