<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'enterprises';

    protected $fillable = [
    	'name',
    	'rif',
    	'address',
    	'phone',
    	'image',
    	'plan',
    	'fecha_solicitud',
        'email'
    ];
}
