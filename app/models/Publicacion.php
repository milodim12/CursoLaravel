<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Publicacion
 *
 * @author HP
 */
class Publicacion extends Eloquent{
    protected $table='publicacion';
    public $timestamps = true;
    
    public function getDateFormat(){
    return 'U';
    }
    public static function likes($id){
    return Megusta::where('id_publicacion',$id)->count();
    }
        public function leGustaA($usuario){
        return Megusta::where('id_publicacion',$this->id)
                        ->where('id_usuario',$usuario)
                        ->count() > 0? 'Ya no me gusta':'Me gusta';
        
    }
    public function comentarios(){
        return Publicacion::where('id_padre', $this->id)
                              ->where('tipo',1)
                              ->get();
    }
    
}

?>
