<?php
    include "Crud.php";
    $nombre=$_POST["nombre"];
    $crud = new Crud();
    if ($crud->guardar($nombre)) {
        header ("location.php");
    }else{
        echo "no se guardo";
    }
?>