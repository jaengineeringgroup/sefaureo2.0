<?php
class Conexion
{
    /* Se crea la funcion para conectar */
    static public function conectar(){
        /* SE CREA UN OBJETO LLAMADO PDO */
        $link = new PDO("mysql:host=localhost;dbname=prueba",
                        "root",
                        "");

        /* LA FUNCION EXEC SIRVE PARA QUE ACEPTE LOS CARACTERES LATINOS */
        $link->exec("set names utf8");
        
        return $link;

    }
} 