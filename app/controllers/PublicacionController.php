<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PublicacionController
 *
 * @author HP
 */
class PublicacionController extends BaseController {
    
    public function postCrear(){
        $publicacion=[
            'publicacion'=>Input::get('publicacion'),
            'tipo'=> '0',
            'id_usuario'=> Auth::user()->id
         ];
        DB::table('publicacion')->insert($publicacion);
        return Redirect::to('/camiloun');
    }
    public function postComentar(){
        
    }
    public function getEliminar($id){
       $publicacion=Publicacion::find($id);
    
    if($publicacion && $publicacion->id_usuario==Auth::user()->id){
        $publicacion->delete();
    }
    return Redirect::to('/camiloun');
    }
    
}

?>
