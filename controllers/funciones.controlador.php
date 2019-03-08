<?php

class funcionGral{
    static public function fecha(){
        $timestamp = strtotime($fecha);
        $meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
        $semana = ['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'];
        
        $diatxt = date('N', $timestamp) - 1;
        $dia = date('j', $timestamp);
        $mes = date('m', $timestamp) - 1;
        $year = date('Y', $timestamp);
        
        $fecha = "$semana[$diatxt], $dia de " . $meses[$mes] . " del $year";
        return $fecha;
    }

}