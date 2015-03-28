/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var managerScreen=managerScreen || {};
managerScreen={
    CambiarColorFondo : function (color){
        $("body").css('background-color',color)
    },
    saludar : function(){
        alert("hola muchahocs");
    },
    OcultarParrafo: function (){
        document.getElementById("parrafo").style.display="none";
    },
    OcultarParrafoSinID: function (){
    $("p,div").toggle();
    },
    MuestreParrafo: function (){
    var tam=document.getElementsByTagName("P").length;
    for(var i=0;i<tam;i++){
    document.getElementsByTagName("P")[i].style.display="block";
    }
    },
    desvanecer: function (){
    $("p").fadeToggle(2000);
    },
    Alertify:function(){
    alertify.prompt("Bienvenido de su edad", function (e, str) {
    // str is the input text
    if (str<18) {
        // user clicked "ok"
        alertify.log("Menor de edad salgase", "Error", 3000);
    } else {
        // user clicked "cancel"
        
    }
}, "Default Value");
    },
    ComprobarSeguridad:function(){
    $("#password").complexify({}, function(valid, complexity){
      alert("Password complexity: " + complexity);
    });


    }
    
}
var ms=managerScreen;