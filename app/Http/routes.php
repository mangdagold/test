<?php
use App\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/help', function () {
    return view('help');
});


Route::auth();
Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');
Route::get('/register', ['as' => 'register', 'uses' => 'Auth\AuthController@showRegistrationForm']);


Route::get('/home', 'HomeController@index');

Route::resource('user', 'UserController');

Route::get('mail/{id}', function($id){
	// dd(Config::get('mail'));
	$user = User::findOrFail($id);
	Mail::send('emails/verify_template', ['user' => $user], function($m){
		$m->to('podchara.t@gmail.com', "บี")->subject('7Amulet กรุณายืนยัน email เพื่อนเข้าใช้งาน');
		$m->from('kttpgroup@gmail.com', "Kit");
	});
	return "successfully";
});
