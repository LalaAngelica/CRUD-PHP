<?php
    include "Crud.php";
    $id=$_GET["id"];
    $crud = new Crud();
    if ($crud->eliminar($id)) {
        header ("location:index.php");
    }else {
        echo "no se pudo eliminar";
    }
?>

