<?php
class Conexion
{
    /* Se crea la funcion para conectar */
    static public function conectar(){
        /* SE CREA UN OBJETO LLAMADO PDO */
        $link = new PDO("mysql:host=localhost;dbname=sefaureo2",
                        "jaengine_sef219",
                        "yD$4QM4LJ2s2");

        /* LA FUNCION EXEC SIRVE PARA QUE ACEPTE LOS CARACTERES LATINOS */
        $link->exec("set names utf8");
        
        return $link;

    }
} 