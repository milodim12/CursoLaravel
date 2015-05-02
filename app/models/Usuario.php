<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Usuario extends Eloquent{
    protected $table='usuario';
    public function misPublicaciones(){
    return Publicacion::where('id_usuario',$this->id)
                                ->orderBy('id', 'des')
                                ->get();
    }
}

?>
