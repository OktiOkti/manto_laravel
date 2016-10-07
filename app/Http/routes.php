<?php
use App\Product;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','ProductController@index' );

Route::get('products','ProductController@index');
Route::get('add','ProductController@index');
Route::post('add', 'ProductController@addProduct');
Route::get('products/{id}','ProductController@showProduct');
//Route::get('login','ProductController@login');
Route::delete('add/{id}', 'ProductController@deleteProduct');
Route::get('login',function(){
  return view('auth.login');
});
Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
   'password' => 'Auth\PasswordController',
]);

Route::auth();

Route::get('/home', 'HomeController@index');
