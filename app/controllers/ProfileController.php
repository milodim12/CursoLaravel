<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 */
class ProfileController extends BaseController{
    public function getIndex(){
    $publicaciones=Usuario::find(Auth::user()->id)->misPublicaciones();
    $usuarios=Usuario::all();
    $users="";
    foreach ($usuarios as $usuario){
    

        $users.=",".'"'.$usuario->nombre.'"';

    }
        $users=trim($users,",");
    return View::make('perfil/perfil')->with("nombre",Auth::user()->nombre)
                                      ->with("edad","22")
                                      ->with("publicaciones",$publicaciones)
                                      ->with("usuarios",$users)
                                      ->with("correo",Auth::user()->correo)
                                      ->with("foto",Auth::user()->id.".jpg");
    }
    public function getVer($id){
        if($id==Auth::user()->id)return Redirect::to("/profile");
       $usuario=Usuario::find($id);
       $publicaciones=$usuario->misPublicaciones();
    if($usuario){
        return View::make('perfil/perfil')
                                        ->with("nombre",$usuario->nombre)
                                      //->with("edad","22")
                                      ->with("publicaciones",$publicaciones)
                                      //->with("usuarios",$users)
                                      ->with("correo",$usuario->correo)
                                      ->with("foto",$usuario->id.".jpg");
    }
    else{
        return Redirect::to("/profile");
    }
       
   }
   public function getLogout(){
       Auth::logout();
       return Redirect::to("/login");
   }

}
?>
