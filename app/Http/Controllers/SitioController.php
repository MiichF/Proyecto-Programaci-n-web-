<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

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
        
        return view('contacto', compact('nombre','correo'));
        }

     Public function LandingPage()
     {
        return view('LandingPage');
     }   

    
     Public function recibirFormContacto(Request $request){
        //recibir info
        //validar
    
        
        $request -> validate([
            'nombre' =>'required|max:255|min:3',
            'correo' =>'required|email',
            'mensaje'=>'required',
        ]);
        //insertar a BD
        
        DB::table('usuarios')->insert([
            'nombre' => $request -> nombre,
            'correo' => $request -> correo,
            'mensaje' => $request -> mensaje,
            'created_at' => now(),
            'updated_at' => now(),
            
            
        ]);

        return redirect('/contacto');

        echo("funciona");

     }

}
