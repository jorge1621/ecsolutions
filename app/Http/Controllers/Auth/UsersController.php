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

 

    public function admin(){
        if (Auth::check()) {
            $result = User::all();
            foreach ($result as $value) {
                if ($value['attributes']['type'] == 'superUser') {
                    $user = $result; 
                    return view('homeUser', ['users' => $user]);
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
