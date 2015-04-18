/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var managerScreen=managerScreen || {};
managerScreen={
   mostrarBoton:function(){
       $("#btnPublicar").css("display", "block");
       
   },
   comentar:function(id){
       var comentario=$("#comentario-"+id);
       if(comentario.val()!=""){
           $.ajax({
            url: 'publicacion/comentar',
            type: 'POST',
            async: true,
            data: {
                usuario:1,
                comentario:comentario.val()
            },
            success: function(response){
                alert("se ejecutó correctamente");
            }
          });
           alert(comentario.val());
       }
       else{
           alert("este campo es obligatorio");
       }
   }
}
mg=managerScreen;