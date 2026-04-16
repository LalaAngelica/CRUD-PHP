<?php
include "Conexion.php";

class Crud extends Conexion {

    public function guardar($nombre){
        $conexion = parent::conectar();
        $sql = "INSERT INTO t_nombre(nombre) VALUES ('$nombre')";
        $respuesta = mysqli_query($conexion, $sql);
        return $respuesta;
    }

    public function mostrar(){
        $conexion = parent::conectar();
        $sql = "SELECT * FROM t_nombre";
        $respuesta = mysqli_query($conexion, $sql);
        return $respuesta;
    }

    public function eliminar($id){
        $conexion = parent::conectar();
        $sql = "DELETE FROM t_nombre WHERE id='$id'";
        $resultado = mysqli_query($conexion, $sql);
        return $resultado;
    }

    public function editar($id, $nombre){
        $conexion = parent::conectar();
        $sql = "UPDATE t_nombre SET nombre='$nombre' WHERE id='$id'";
        $resultado = mysqli_query($conexion, $sql);
        return $resultado;
    }

    public function obtenerPorId($id){
    $conexion = parent::conectar();
    $sql = "SELECT * FROM t_nombre WHERE id='$id'";
    $resultado = mysqli_query($conexion, $sql);
    return mysqli_fetch_assoc($resultado);
}



}   
?>
