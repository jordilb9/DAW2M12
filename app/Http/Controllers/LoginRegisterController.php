<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Logs;

class LoginRegisterController extends Controller
{
    //
    function login(Request $request){
        session_start();

        $resultat = Usuario::where('User', '=', $request->input('user'))->where('Contrasenya', '=', $request->input('password'))->get();

        if (count($resultat)==1){
            
           $_SESSION['idUsuario']=$resultat[0]->IdUsuario;
           $_SESSION['User']=$resultat[0]->User;
           $_SESSION['Rango']=$resultat[0]->Rango;
           

           $log = new Logs;
           $log->IdUsuario=$resultat[0]->IdUsuario;
           $log->Descripcion="L'usuari ".$resultat[0]->User." a fet login";
           $log->Fechaq =date('Y-m-d H:i:s');
           $log->save();
 
           
            return redirect(url('/'));
        }else return view('LoginRegister',['invalido'=>'Los datos no son validos']);
        
    }
    
    function register(Request $request){
        

        $resultado = Usuario::where('User', '=', $request->input('user'))
                         ->orWhere('Correo', '=', $request->input('email'))
                         ->orWhere('PaladinsNick', '=', $request->input('nickPaladins'))
                         ->get();

        if (count($resultado)==1){
            
           return view('LoginRegister',['RegistroInvalido'=>'El usuario ya existe']); 
            
           
        }else 
            
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
