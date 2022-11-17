<?php 
    function conexion(){
        $servidor = 'localhost';
        $usuario = 'root';
        $passworder = '';
        $base = 'webconexion3';
        $puerto = 3306;

        $conexion = mysqli_connect(
            $servidor,
            $usuario,
            $passworder,
            $base,
            $puerto
        );
        return $conexion;
    }
?>