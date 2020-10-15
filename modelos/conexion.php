<?php

class conexion
{
    public function conectar(){
        $con = new PDO("mysql:host=localhost;dbname=proyectofit", "root",
         "");
        $con->exec("set name ut8");
        
        return $con;

    }
}