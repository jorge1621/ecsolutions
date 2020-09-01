<?php

namespace App\Http\Controllers;
use App\User;
use Exception;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index(){
    	return view('/superUser');
    }

    public function store(Request $request ){
    	try{
    		$save = User::create([
    		'name' => $request['name'],
    		'email' => $request['email'],
    		'password' => bcrypt($request['password']),
    		'type' => $request['type']
    		]);
    	}
    	catch(Exception $e){
    		return view('error.create-user',['error' => $e->getMessage()]);
    	}

    	return redirect()->action('UsersController@admin');
    }

    public function admin(){
        if (Auth::check()) {
            $result = User::all();
            foreach ($result as $value) {
                if ($value['attributes']['type'] == 'superUser') {
                    $user = $result; 
                    return view('adminUser', ['users' => $user]);
                }
                else{
                    return view('error.super-user');
                }
            }
            
        }
        else{
            return view('auth.login');
        }

    	
    }

    public function login(){
    	return view('Users.login');
    }
}
