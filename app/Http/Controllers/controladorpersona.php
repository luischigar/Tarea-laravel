<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorpersona extends Controller
{
    public function ingresar (){

    		return view('ingresar');
    	
    }
    public function mostrar (){
    	return view('mostrar');
    }
    
    public function ingresar2(Request $dato){
    	
    	
    	$nombre = $dato->nombre;
    	$apellido = $dato->apellido;
    	$cedula = $dato->cedula;
    	$promedio = $dato->promedio;

    	$persona = $dato->persona; 


    	$entrada = array ("$nombre", "$apellido", "$cedula", "$promedio", "$persona");
    	//$persona2 .+ $nombre;

    	return view('mostrar', compact('entrada'));
    }
}
