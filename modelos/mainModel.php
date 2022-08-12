<?php
    if($peticionAjax){
        require_once "../config/server.php";
    }else{
        require_once "./config/server.php";
    }

    class mainModel{


        /*------- Funcion conectar a la base de datos --------*/
        protected static function contectar(){
            $conexion = new PDO(sgbd, USER, pass);
            $conexion -> exec("SET CHARACTER SET utf8");
            return $conexion;
        }

                /*------- Funcion ejecutar consultas simples --------*/
        protected static function ejecutar_consultas_simples($consulta){
            $sql = self::contectar()->prepare($consulta);
            $sql -> execute();
            return $sql;
        }
    }