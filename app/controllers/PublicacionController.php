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

    public function postCrear() {
        $publicacion = [
            'publicacion' => Input::get('publicacion'),
            'tipo' => '0',
            'id_usuario' => Auth::user()->id,
            'receptor' => Input::get('receptor')
        ];
        DB::table('publicacion')->insert($publicacion);
        return Redirect::to('/profile/ver/' . Input::get("receptor"));
    }

    public function postComentar() {
        if (Request::ajax()) {
            $publicacion = Publicacion::find(Input::get("publicacion"));
            $comentario = [
                'publicacion' => Input::get('comentario'),
                'tipo' => 1,
                'id_usuario' => Auth::user()->id,
                'receptor' => $publicacion->receptor,
                'id_padre' => $publicacion->id
            ];

            DB::table('publicacion')->insert($comentario);
            return Response::json($comentario);
        }
    }

    public function postMeGusta() {
        $publicacion = Input::get('publicacion');
        $usuario = Usuario::find(Auth::user()->id);
        if ($usuario->leGustaPublicacion($publicacion)) {
            $usuario->yaNoLeGustaPublicacion($publicacion);
            $data['type'] = -1;
        } else {
            $megusta = [
                'id_publicacion' => $publicacion,
                'id_usuario' => Auth::user()->id
            ];
            $data['type'] = 1;
            DB::table('me_gusta')->insert($megusta);
        }
        $data['nlikes'] = Publicacion::likes($publicacion);
        return Response::json($data);
    }

    public function getEliminar($id) {
        $publicacion = Publicacion::find($id);

        if ($publicacion && $publicacion->id_usuario == Auth::user()->id) {
            $publicacion->delete();
        }
        return Redirect::to('/camiloun');
    }

}

?>
