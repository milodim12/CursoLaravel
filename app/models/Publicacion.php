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
}

?>
