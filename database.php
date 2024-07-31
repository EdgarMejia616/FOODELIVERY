<?php

class DataBase
{
    private $host = "13.49.46.209";
    private $database = "fooddeliveryapp";
    private $username = "admin";
    private $password = "qw458ewedw";

    public $conexion;

    //funcion de conexion a la base de datos
    public function getConnection()
    {
        $this->conexion = null;

        try {
            $this->conexion = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, $this->username, $this->password);
            $this->conexion->exec("set names utf8");
            echo "Conectado a la base de datos";
        } catch (PDOException $exception) {
            echo "No se pudo conectar a la base de datos: " . $exception->getMessage();
        }

        return $this->conexion;
    }
}


?>
