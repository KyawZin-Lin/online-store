<?php

use Illuminate\Support\Facades\Route;


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
Route::get("/foo",function (){
 return "this is Foo Routing";
});
Route::view('home','welcome');
Route::view('order','order');
Route::view('cart','cart');
Route::view('detail','detail');

// Route::redirect("bar","foo");
// Route::view('home','welcome');
// Route::get('/user/{user_id?}',function($user_id=null){
//     echo "this is user id". '' .$user_id;
// }) ->name('user');

// Route::prefix('admin')->group(function(){
//     Route::get("/foo",function (){
//         return "this is Foo Routing";
//        });
       
//        Route::redirect("bar","foo");
//        Route::view('home','welcome');
//        Route::get('/user/{user_id?}',function($user_id=null){
//            echo "this is user id". '' .$user_id;
//        }) ->name('user');
// });


// Route::view('home','welcome');
// Route::get('user/{user_id}/{class_id?}',function($user_id,$class_id=null){
//   return $user_id .'/'. $class_id;
// });
 