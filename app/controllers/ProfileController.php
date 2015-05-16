<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 */
class ProfileController extends BaseController{
    public function getIndex(){
    $usuario=Usuario::find(Auth::user()->id);
    $publicaciones=$usuario->misPublicaciones();
    $usuarios=$usuario->misAmigos();
    $users=$this->Typeahead();
    return View::make('perfil/perfil')->with("nombre",Auth::user()->nombre)
                                      ->with("usuario",$usuario)
                                      ->with("nombre_info",Auth::user()->nombre)
                                      ->with("edad","22")
                                      ->with("publicaciones",$publicaciones)
                                      ->with("usuarios",$users)
                                      ->with("ListaAmigos",$usuarios)
                                      ->with("correo",Auth::user()->correo)
                                      ->with("foto",Auth::user()->id.".jpg");
    }
    public function getVer($id){
        if($id==Auth::user()->id)return Redirect::to("/profile");
       $users=$this->Typeahead();
       $usuario=Usuario::find($id);
       $publicaciones=$usuario->misPublicaciones();
       $usuarios=$usuario->misAmigos();
    if($usuario){
        return View::make('perfil/perfil')
                                        ->with("usuario",$usuario)
                                        ->with("nombre",Auth::user()->nombre)
                                        ->with("nombre_info",$usuario->nombre)
                                      //->with("edad","22")
                                      ->with("publicaciones",$publicaciones)
                                      ->with("ListaAmigos",$usuarios)
                                      ->with("usuarios",$users)
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
   public function Typeahead(){
    $usuarios=Usuario::all();
    $users="";
    foreach ($usuarios as $usuario){
    

        $users.=",".' { id: '.$usuario->id.', name: '.'"'.$usuario->nombre.'"'.' }';

    }
        $users=trim($users,",");
        return $users;
   }
   public function postBuscar(){
       $id=Input::get("id");
       return $this->getVer($id);
   }

}
?>
