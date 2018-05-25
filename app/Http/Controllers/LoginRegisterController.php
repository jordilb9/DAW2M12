<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Logs;
use Illuminate\Support\Facades\Session;

class LoginRegisterController extends Controller
{
    //
    function login(Request $request){
       

        $resultat = Usuario::where('User', '=', $request->input('user'))->where('Contrasenya', '=', $request->input('password'))->get();

        if (count($resultat)==1){           
           Session::put('idUsuario',$resultat[0]->IdUsuario);
           Session::put('User',$resultat[0]->User);
           Session::put('Rango',$resultat[0]->Rango);
           

           $log = new Logs;
           $log->IdUsuario=$resultat[0]->IdUsuario;
           $log->Descripcion="El usuario ".$resultat[0]->User." a hecho login";
           $log->Fechaq =date('Y-m-d H:i:s');
           $log->save();
 
           
            return redirect(url('/'));
        }else return view('LoginRegister',['invalido'=>'Los datos no son validos']);
        
    }
    
    function register(Request $request){
        
  
        $resultadoUser = Usuario::where('User', '=', $request->input('user'))->get();
        $resultadoCorreo = Usuario::where('Correo', '=', $request->input('email'))->get();
        $resultadoNick = Usuario::where('PaladinsNick', '=', $request->input('nickPaladins'))->get();

        if (count($resultadoUser)==1){
                return view('LoginRegister',['RegistroInvalidoUser'=>'El usuario ya existe']); 
                
        }else {
            if (count($resultadoCorreo)==1){
                return view('LoginRegister',['RegistroInvalidoCorreo'=>'El correo ya esta en uso']); 

            }else{
                if (count($resultadoNick)==1){
                    return view('LoginRegister',['RegistroInvalidoNick'=>'El usuario ya existe']); 

                }else{
                   $newUser = new Usuario;
                   $newUser->User=$request->user; 
                   $newUser->Contrasenya=$request->password; 
                   $newUser->Correo=$request->email; 
                   $newUser->Nombre=$request->nombre; 
                   $newUser->Apellido=$request->apellidos; 
                   $newUser->Edad=$request->edad; 
                   $newUser->Nacionalidad =$request->nacionalidad; 
                   $newUser->PaladinsNick=$request->nickPaladins; 
                   $newUser->Rango=1; 
                   $newUser->FechaCreacion=date('Y-m-d H:i:s'); 
                   $newUser->save();



                    return redirect(url('/LoginRegister'));
                }
            }

        }

    }




}