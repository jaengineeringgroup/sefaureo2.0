<?php

/* SE MANDAN A LLAMAR LOS CONTROLADORES*/
require_once "controllers/plantilla.controlador.php";
require_once "controllers/usuarios.controlador.php";

/*SE MANDAN A LLAMAR LOS MODELOS */
require_once "models/usuarios.modelo.php";

/*SE CREA LA VARIABLE DONDE CARGA LA CLASE DE CONTROLADOR */
$plantilla = new controladorPlantilla();
/* SE EJECUTA EL MEOTDO*/
$plantilla -> ctrPlantilla();