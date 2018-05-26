<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Logs;
use App\Blog;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    
    function newBlog(Request $request){
        
//           $image = $_FILES[$request->fileBlo]['tmp_name'];
//           $imgContent = addslashes(file_get_contents($image));
            $imagen = file_get_contents($request->fileBlog);
        

           $new = new Blog;
           $new->Titulo=$request->titulo;
           $new->Descripcion=$request->descriptionBlog;
           $new->Imagen=$imagen; 
           $new->FechaEntrada =date('Y-m-d H:i:s');
           $new->save();

           $log = new Logs;
           $log->IdUsuario=Session::get('idUsuario');
           $log->Descripcion="El usuario ".Session::get('User')." a creado un nuevo blog";
           $log->Fechaq =date('Y-m-d H:i:s');
           $log->save();
           
           
           return redirect(url('/CargarBlog'));
     
    }
  
    function cargarBlog(Request $request){

        $resultado = Blog::all();  

        return view('Blog',['resultado'=> $resultado]);
        
    }
    
    
}
