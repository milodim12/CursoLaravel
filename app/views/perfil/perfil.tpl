{capture assign="left"}
    <br>
    <p><center><img id="foto_perfil" src="{url("/assets/img/profile")}/{$foto}" width="150" height="150"></center></p>
    <div class="well">
        <center><div class="glyphicon glyphicon-lock" aria-hidden="true"> Trabaja en Facebook</div></center>
        <center><div class="glyphicon glyphicon-lock" aria-hidden="true"> Nombre: {$nombre_info}</div></center>
        <center><div class="glyphicon glyphicon-lock" aria-hidden="true"> Correo: {$correo}</div></center>
        <br><center><div class="glyphicon glyphicon-education" aria-hidden="true"> Estudia Ingeniería de Sistemas</div></center>
        <br><center><div class="glyphicon glyphicon-home" aria-hidden="true"> Vive en Medellín</div></center>
    </div>
    <div class="well">
        <p><b>Amigos</b></p>
        <table class="estilo_tabla">
           <tr class="estilo_tabla">
         {assign var=contador value=0}
        {foreach $ListaAmigos as $amigo}
            {assign var=contador value=$contador+1}
            <td class="estilo_tabla"><a href="{url('profile/ver')}/{$amigo->id}"><img width="70" height="70" src="/Camilo/public/assets/img/profile/{$amigo->id}.jpg"></a><p><center>{$amigo->nombre}</p></center></td>
            
                {if $contador%3 eq 0}
                    </tr>
                    <tr class="estilo_tabla">
                {/if}
        {/foreach}
           
        </table>
    </div>
{/capture}
{capture assign="right"}
<br>
{Form::open(['url'=>'/publicacion/crear'])}
<p><textarea required name="publicacion" onclick="mg.mostrarBoton()" class="col-sm-12" rows="4" placeholder="¿Qué estas pensando?"></textarea></p>
<input type='hidden' value='{$usuario->id}' name="receptor">
<p><button type="submit" id="btnPublicar" style="display: none" class="btn pull-right btn-primary btn-primary-custom">Publicar</button></p>
{Form::close()}
<hr>
    <br>
    <br>
    <br>
    <br>
    <br>
    {foreach $publicaciones as $publicacion}
        <div class="well" style="word-break:break-all; margin-bottom: 5px;padding: 8px 8px; font-family: 'Montserrat', sans-serif; ">
            <button class="close" area-hidden="true" style="margin-top: -8px;"><a href="{url('publicacion/eliminar')}/{$publicacion->id}">&times</a></button>
            <!--<span class="pull-right glyphicon glyphicon-remove" style="margin-top:-8px "></span> -->
            <a href="{url('profile/ver')}/{$publicacion->id_usuario}"><img width="40" height="40" src="{url('assets/img/profile')}/{$publicacion->id_usuario}.jpg"></a>
            {$publicacion->publicacion}
        </div>
        <div><span class="glyphicon glyphicon-comment"></span> <span>Comentar |</span>
            <span class="glyphicon glyphicon-thumbs-up"></span> <span id="likes2-{$publicacion->id}" onClick="mg.meGusta({$publicacion->id})">{$publicacion->leGustaA(Auth::user()->id)}</span>
            <span class="glyphicon glyphicon-thumbs-up"></span> <span id="likes-{$publicacion->id}">{Publicacion::likes($publicacion->id)} personas les gusta esto</span>
        <div id="comentarios-{$publicacion->id}">
            {foreach $publicacion->comentarios() as $comentario}
            <div style="margin-bottom: 1px;font-size:10px; padding:3px;" class="well well-sm col-sm-7"><img width="20" height="20" src="{url('assets/img/profile')}/{$comentario->id_usuario}.jpg">{$comentario->publicacion}</div>
             {/foreach}
        </div>
        <div style="clear:both"></div>
        <br>    
        <br><textarea id='comentario-{$publicacion->id}' rows="1" placeholder="Escribe tu comentario ..."class="col-sm-6"></textarea>
        <button class="btn btn-success btn-sm" onclick="mg.comentar({$publicacion->id})">Comentar</button>
        </div>
        <hr>
    {foreachelse}
        <div class="alert alert-danger">
            No hay publicaciones
        </div>
    {/foreach}    
{/capture}
{capture assign="portada"}
    <p><center><img id="portada" src="http://gentepasionyfutbol.com.co/wp-content/uploads/2015/01/Medell%C3%ADn-2015-1.jpg"</center></p>
    <div id="barra_portada" class="well"></div>
{/capture}
{include file="../masterpage/template.tpl" layout="two_columns"}
