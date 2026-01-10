<?php
// --- CREDENCIALES PARA XAMPP (LOCAL) ---
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = ''; 


$DB_NAME = 'u821594572_joyeria_db'; 

// Crear conexión (MySQLi)
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

// Verificar conexión
if (!$conn) {
    die('Error de conexión a MySQL (XAMPP): ' . mysqli_connect_error());
}

// Charset para acentos y caracteres especiales
mysqli_set_charset($conn, 'utf8mb4');
?>
