<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FollowController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
   if(Auth::check())
   return redirect('/home');
   else
   return view('auth/login');
});
Route::group(['middleware' => ['auth']], function(){
   Route::get('user/profile',[UserController::class, 'edit']);
   Route::patch('user', [UserController::class, 'update']);
   //POST URLS
   Route::resource('post', PostController::class );
   Route::get('user/posts', [PostController::class, 'userPosts']);
   Route::get('user/{id}/posts', [PostController::class, 'userFriendPosts']);
   //Like URLS
   Route::resource('like', LikeController::class);
   //Comment URLS
   Route::resource('comment', CommentController::class);
   //Users URLS
   Route::get('users', [UserController::class ,'index']);
   Route::get('user_info/{id}', [UserController::class, 'user_info']);
   Route::get('search', [UserController::class, 'autocomplete']);
   //Follow URLS
   Route::resource('follow', FollowController::class);
   Route::get('user/followers', [FollowController::class , 'index']);

   Route::get('/home', [App\Http\Controllers\PostController::class, 'index'])->name('home');
});

Auth::routes();



//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
