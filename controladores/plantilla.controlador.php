<?php

class ControladorPlantilla{

    public function plantilla(){

        include "vistas/plantilla.php";

    }

    /*===========================================
	TRAEMOS LOS ESTULOS DINAMICOS DE LA plantilla
    ============================================*/

    public function ctrEstiloPlantilla(){

        $tabla = "plantilla";
        
        $respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);

        return $respuesta;
    }

}