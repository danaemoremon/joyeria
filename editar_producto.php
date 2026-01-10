<?php
// editar_producto.php

// Incluir archivos de configuración y Doctrine
require_once "bootstrap.php";
session_start();

// Verificar si el usuario es admin
if ($_SESSION['rol_logueado'] != 'admin') {
    echo "No tienes permisos para editar productos.";
    exit;
}

// Obtener el ID del producto
$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($id === null) {
    echo "No se especificó el producto.";
    exit;
}

// Obtener el producto de la base de datos usando Doctrine
$producto = $entityManager->find('Producto', $id);
if ($producto === null) {
    echo "Producto no encontrado.";
    exit;
}

// Si se envió el formulario, actualizar el precio
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nuevoPrecio = $_POST['precio'];
    $producto->setPrecio($nuevoPrecio);
    $entityManager->flush();  // Guardar los cambios en la base de datos
    echo "Precio actualizado correctamente.";
}
?>

<!-- Formulario HTML para editar el precio -->
<h1>Editar Producto</h1>
<form method="POST">
    <label for="nombre">Nombre del producto:</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $producto->getNombre(); ?>" disabled>

    <label for="precio">Nuevo Precio:</label>
    <input type="text" id="precio" name="precio" value="<?php echo $producto->getPrecio(); ?>" required>

    <button type="submit">Actualizar Precio</button>
</form>
