<?php
use Illuminate\Support\Facades\Auth;
use App\User;
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
    return redirect('http://ecsolutions.tonohost.com/');
});

Route::get('/register-enterprise', function () {
    return view('register-enterprise');
});

Route::post('save-register', 'RegisterController@Register');

Route::get('/register', 'auth\RegisterController@register');

Route::get('/create-user', 'UsersController@index');

Route::post('/save-user', 'auth\RegisterController@create');

Route::get('/adminUser', 'UsersController@admin');

Route::get('/login', 'UsersController@login');

Route::get('/registerUser', function(){
	if (Auth::check()) {
		$user = Auth::user();
		if ($user->type == 'superUser') {
			return view('auth.register');
		}
		else{
			Auth::logout();
			return view('error.session');
		}
		
	}
	else{
		return view('auth.login');
	}
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
