<?php 

/* SE HACE LA CONEXION DE LA BASE DE DATOS */
require_once "conexion.php";

class ModeloUsuarios {
    
    /* METODO PARA MOSTRAR USUARIOS */
    static public function mdlMostrarUsuarios($tabla, $item, $valor){

        /* SE CREAR EL OBJETO PDO PARA INVOCAR UNA RESPUESTA DE LA CLASE CONEXION LA CUAL EJECUTARA
        EL METODO CONECTAR Y EN EL PREPARE SE METE LA SENTENCIA SQL 
        CUANDO SE TIENE ESTO ":$item" SIGNIFICA QUE VA SER UN PARAMETRO QUE SERA ENLAZADO*/
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        /* CON EL METODO "bindParam" enlazamos el parametro y se compara con el valor que puso el usuario
        por medio de la variable $valor 
        el PDP::PARAM_STR significa que solo que se va recibir string */
        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
        /* CON ESTE COMANDO SE EJECUTA EL OBJETO(LA SECUENCIA SQL) */
        $stmt -> execute();
        /* CON LA FUNCIoN FECTH SOLO RETORNAMOS UNA SOLA LINEA DE LA TABLA */
        return $stmt -> fetch();
        /* SE CIERRA LA CONEXION */
        $stmt -> close();
        $stmt = null;


    }

}