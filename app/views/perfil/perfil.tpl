{capture assign="left"}
    <br>
    <p><center><img src="https://scontent.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/10365956_10204816016858227_1172762318500324956_n.jpg?oh=5db549d718fb8c4347c892cd175a0003&oe=55AD067B" width="150" height="150"></center></p>
    <div class="well">
        <center><div class="glyphicon glyphicon-lock" aria-hidden="true"> Trabaja en Facebook</div></center>
        <br><center><div class="glyphicon glyphicon-education" aria-hidden="true"> Estudia Ingeniería de Sistemas</div></center>
        <br><center><div class="glyphicon glyphicon-home" aria-hidden="true"> Vive en Medellín</div></center>
    </div>
{/capture}
{capture assign="right"}
<br>
{Form::open(['url'=>'/publicacion/crear'])}
<p><textarea required name="publicacion" onclick="mg.mostrarBoton()" class="col-sm-12" rows="4" placeholder="¿Qué estas pensando?"></textarea></p>
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
            {$publicacion->publicacion}
        </div>
        <div><span class="glyphicon glyphicon-comment"></span> <span>Comentar |</span>
        <span class="glyphicon glyphicon-thumbs-up"></span> Me gusta
        <div id="comentarios-{$publicacion->id}">
            <div style="font-size:10px; padding:3px" class="well well-sm col-sm-7">Esto es un comentario</div>
             
        </div>
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
    <p><center><img src="http://gentepasionyfutbol.com.co/wp-content/uploads/2015/01/Medell%C3%ADn-2015-1.jpg" width="830" height="500"></center></p>
{/capture}
{include file="../masterpage/template.tpl" layout="two_columns"}