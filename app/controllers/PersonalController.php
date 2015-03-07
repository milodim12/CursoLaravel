<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class PersonalController extends BaseController{
    
public function getRegistrar($tipo){
if($tipo=="medico"){
    return View::make('registro.medico');
}
else if($tipo=="enfermera"){
    return View::make('registro.medico');
}
else if($tipo=="paciente"){
    return View::make('registro.paciente');
}
else{
    echo "error";
}
}
public function postRegistrar($tipo){

}
}
?>
