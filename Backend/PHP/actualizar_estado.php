<?php
session_start();

// Verificar si el usuario ha iniciado sesión y es administrador
if (!isset($_SESSION['id_usuario']) || $_SESSION['id_rol'] != 2) {
    header("Location: login.php");
    exit();
}

// Conexión a la base de datos
$host = 'localhost';
$dbname = 'aqua';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// Obtener datos del formulario
$id_reporte = $_POST['id_reporte'];
$estado = $_POST['estado'];

// Actualizar estado del reporte
try {
    $sql = "UPDATE reportes SET estado = :estado WHERE id_reporte = :id_reporte";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':estado', $estado);
    $stmt->bindParam(':id_reporte', $id_reporte);
    $stmt->execute();

    echo "Estado del reporte actualizado con éxito.";
    header("Location: ver_reportes.php");
    exit();

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Cerrar conexión
$conn = null;
?>
