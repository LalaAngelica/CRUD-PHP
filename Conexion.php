<?php
class Conexion {

    public function conectar(){
        return mysqli_connect(
            "localhost",
            "root",
            "lala2908",
            "crud"
        );
    }

}
?>