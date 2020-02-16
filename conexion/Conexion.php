<?php
    class Conexion{

        public function getConexion(){
            $conexion = new mysqli("localhost","root","111","bdcolegio");
            $conexion->query("SET NAMES 'utf8'");
            return $conexion;
        }

    }






?>