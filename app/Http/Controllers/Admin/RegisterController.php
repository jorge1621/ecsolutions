<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Register;
//
use Mail;
class RegisterController extends Controller
{
    public function index(){
        return view('register-enterprise.php');
    }

    public function Register(Request $request){

    	$file = $request->file('image'); 
    	$nombre = $file->getClientOriginalName();
    	\Storage::disk('file')->put($nombre,  \File::get($file));
	
    	$plan = 'Prueba gratuita';

    	if ($request['plan0'] != '') {
    		$plan = 'Prueba gratuita';
    	}
    	elseif ($request['plan3'] != '') {
    		$plan = 'Tres meses';
    	}
    	elseif ($request['plan6'] != '') {
    		$plan = 'Seis meses';
    	}
    	elseif ($request['plan12'] != '') {
    		$plan = '12 meses';
    	}
      
        $save = Register::create([
        	'name' => $request['enterprise'],
        	'rif' => $request['rif'],
        	'address' => $request['address'],
        	'phone' => $request['phone'],
        	'image' => $nombre,
        	'email' => $request['email'],
        	'plan' => $plan,
        	'fecha_solicitud' => date('Y-m-d')
        ]);


        $subject = "Afiliacion";
        $for = $request['email'];
         Mail::send('emails.email',['name' => $request['enterprise'], 'plan' => $plan], function($msj) use($subject,$for){
            $msj->from("ecsolutions@gmail.com","EC Solutions");
            $msj->subject($subject);
            $msj->to($for)
            ->attach(public_path('img\\'.'system1.jpg'));
        });

        return view('emails.registered');


    }
}
