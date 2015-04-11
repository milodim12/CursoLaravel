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
<p><textarea onclick="mg.mostrarBoton()" class="col-sm-12" rows="4" placeholder="¿Qué estas pensando?"></textarea></p>
<p><button id="btnPublicar" style="display: none" class="btn pull-right btn-primary btn-primary-custom">Publicar</button></p>
{/capture}
{capture assign="portada"}
    <p><center><img src="http://gentepasionyfutbol.com.co/wp-content/uploads/2015/01/Medell%C3%ADn-2015-1.jpg" width="830" height="500"></center></p>
{/capture}
{include file="../masterpage/template.tpl" layout="two_columns"}