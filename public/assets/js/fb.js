/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

var managerScreen=managerScreen || {};
managerScreen={
   mostrarBoton:function(){
       $("#btnPublicar").css("display", "block");
       
   },
    typeahead:function(){
    alert("ie");
    $('#dt1').typeahead({
        source: function(query, process) {

            objects = [];
            console.log("oe");
            map = {};
            var data = [{"id":1,"label":"machin"},{"id":2,"label":"truc"}] // Or get your JSON dynamically and load it into this variable
            $.each(data, function(i, object) {
            map[object.label] = object;
            objects.push(object.label);
            });
        process(objects);
        }
    });
    },
   meGusta:function(id){
            $.ajax({
            url: base_url + '/publicacion/me-gusta',
            type: 'POST',
            async: true,
            data: {
                publicacion:id
            },
            success: function(response){
                var mensaje=response.nlikes+" personas les gusta esto";
                $('#likes-'+id).text(mensaje);
                $('#likes2-'+id).text(response.type==-1?"Me gusta |" : "Ya no me gusta |");
            }
          });
   },
   comentar:function(id){
       var comentario=$("#comentario-"+id);
       if(comentario.val()!=""){
           $.ajax({
            url: base_url + '/publicacion/comentar',
            type: 'POST',
            async: true,
            data: {
                publicacion:id,
                comentario:comentario.val()
            },
            success: function(response){
                $("#comentarios-"+id).append("<div style='font-size:10px; margin-bottom: 1px; padding:3px' class='well well-sm col-sm-7'>"+"<img width='20' height='20' src="+base_url+"/assets/img/profile/"+response.id_usuario+".jpg>"+response.publicacion + "</div>")
               
                comentario.val("");
            }
            
          });
       }
       else{
           alert("este campo es obligatorio");
       }
   }
}
mg=managerScreen;


