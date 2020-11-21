<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CreatePostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/user', [UserController::class, 'index']);


Route::get( '/' , [ HomeController::class , 'index' ] );
Route::get( 'post/{id}' , [PostController::class, 'index' ] );
Route::get( '/newpost' , [CreatePostController::class, 'index' ] );
	
Route::post('/newpost', [CreatePostController::class, 'store' ]);