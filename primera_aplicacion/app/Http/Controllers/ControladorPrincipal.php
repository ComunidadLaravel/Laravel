<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ControladorPrincipal extends Controller
{	
	public function inicio(){
        return view('welcome');
    }

    public function usuario($nombre='Error'){
    	return view('usuario', ['name' => $nombre]);
        
    }

    public function grupo(){
    	return view('grupo');
    }
}
