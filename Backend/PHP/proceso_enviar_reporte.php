<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['id_usuario'])) {
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

// Recibir datos del formulario de reporte
$nombre_completo = $_POST['nombre_completo'];
$telefono = $_POST['telefono'];
$numero_de_toma = $_POST['numero_de_toma'];
$direccion = $_POST['direccion'];
$tipo_de_problema = $_POST['tipo_de_problema'];
$descripcion_del_problema = $_POST['descripcion_del_problema'];
$fechareg = date ("Y-m-d"); //mismo proceso
$id_usuario = $_SESSION['id_usuario'];

// Guardar reporte en la base de datos
try {
    $sql = "INSERT INTO reportes (nombre_completo, telefono, numero_de_toma, direccion, tipo_de_problema, descripcion_del_problema, fecha_del_reporte, id_usuario) 
    VALUES (:nombre_completo, :telefono, :numero_de_toma, :direccion, :tipo_de_problema, :descripcion_del_problema, :fechareg, :id_usuario)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':nombre_completo', $nombre_completo);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':numero_de_toma', $numero_de_toma);
    $stmt->bindParam(':direccion', $direccion);
    $stmt->bindParam(':tipo_de_problema', $tipo_de_problema);
    $stmt->bindParam(':descripcion_del_problema', $descripcion_del_problema);
    $stmt->bindParam(':fechareg', $fechareg);

    
    
    $stmt->bindParam(':id_usuario', $id_usuario);

    $stmt->execute();

    echo "Reporte enviado con éxito.";

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Cerrar conexión
$conn = null;
?>
