<?php

/******************************conexión con PDO***************/

/* INSTRUCCIONES
    1.creo variable, instancia clase PDO
            ARGUMENTOS: 
            //1er arg-->host con el que quiero conectar y nombre de la bbdd
            //2do arg-->nombre de usuario
            //3er arg-->password

    2.Conexión satisfactoria
*/


    try{

        $conexion = new PDO ("mysql:host = localhost ; dbname=usuarios" , "root" , ""); 
        $conexion->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

        echo "Conexión OK";

    }catch(PDOException $e){

        //llamo a la función getMessage()
        //el objeto $e tiene una función getMessage()

        die("Conexión fallida: " . $e->getMessage());

    }finally{
        echo "<br>Vaciando la memoria para ahorrar recursos";
        $conexion = null; //vaciar la memoria
    }
    //en este caso, si entra al catch, no se llega a realizar el finally ya que llega a entrar al die()
    
?>