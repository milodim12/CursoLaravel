<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Usuario extends Eloquent{
    protected $table='usuario';
    public function misPublicaciones(){
    return Publicacion::where('receptor',$this->id)
                                ->where('tipo',0)
                                ->orderBy('id', 'des')
                                ->get();
    }
   public function misAmigos(){
    return Usuario::where('id','<>',$this->id)->get();
    }
    public function leGustaPublicacion($publicacion){
      return Megusta::where('id_publicacion',$publicacion)->where('id_usuario',$this->id)->count()>0;
    
    }
    public function yaNoLeGustaPublicacion($publicacion){
       Megusta::where('id_publicacion',$publicacion)->where('id_usuario',$this->id)->delete();
    
    }
}

?>
