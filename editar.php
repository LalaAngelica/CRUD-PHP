<?php
include "Crud.php";

$crud = new Crud(); 

// Cuando envías el formulario
if (isset($_POST["nombre"])) {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $crud->editar($id, $nombre);
    header("Location:index.php");
    exit();
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $dato = $crud->obtenerPorId($id);
    $nombre = $dato["nombre"];
}
?>

<form method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="text" name="nombre" value="<?php echo $nombre; ?>" required>
    <br><br>
    <button type="submit">Actualizar</button>
</form>
