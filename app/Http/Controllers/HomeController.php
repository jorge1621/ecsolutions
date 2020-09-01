<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user = Auth::user();

        if ($user->status == 'disable') {
            Auth::logout();
            return view('auth.disabled');
        }
        else{
             if ($user->type == 'superUser') {
                return view('homeUser', compact('user'));
             }
             else{
                return view('home', compact('user'));
             }
             
        }
        
    }
}
