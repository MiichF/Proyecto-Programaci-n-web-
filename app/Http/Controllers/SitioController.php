<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    //<?php

    Public function contacto($codigo = null){
         
            if ($codigo == "1234"){
        
                $nombre ='Paulina_Figueroa';
                $correo= 'miichfn@gmail.com';    
    
            }else{
                $nombre = "";
                $correo = "";
            
            }
        
        return view('contacto', compact('nombre','correo','codigo'));
        }

     Public function LandingPage()
     {
        return view('LandingPage');
     }   

     Public function contacto1()
     {
        return view('contacto');
     }  
    
     Public function recibirFormContacto(Request $request){
        //recibir info
        //validar
        
        dd($request);
        
        $request -> validate([
            'nombre' => 'required|max:255|min:3',
            'correo' => ['required','email'],
            'mensaje'=> 'required',
        ]);
        //insertar a BD


     }

}
