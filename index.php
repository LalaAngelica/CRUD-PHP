<?php
    include "Crud.php";
    $crud = new Crud();
    $datos = $crud->mostrar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
</head>
<body>

<h2>CRUD</h2>

<form action="guardar.php" method="POST">
    <input type="text" name="nombre" placeholder="Ingresa nombre" required>
    <br><br>
    <button type="submit">Guardar</button>
</form>

<br>

<table border="1">
    <tr>
        <th>Nombre</th>    
        <th>Editar</th>    
        <th>Eliminar</th>    
    </tr>

<?php foreach($datos as $dato): ?>
<tr>
    <td><?php echo $dato['nombre']; ?></td>
    <td>
        <a href="editar.php?id=<?php echo $dato['id']; ?>">Editar</a>
    </td>
    <td>
        <a href="eliminar.php?id=<?php echo $dato['id']; ?>">Eliminar</a>
    </td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>
