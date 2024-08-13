<?php
session_start();

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

// Recibir datos del formulario de inicio de sesión
$correo = isset($_POST['correo']) ? $_POST['correo'] : ''; // Si 'correo' no existe, se asigna una cadena vacía
$contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : ''; // Obtener la contraseña en texto plano

// Validar credenciales
try {
    $sql = "SELECT * FROM registro WHERE correo_electronico = :correo LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':correo', $correo);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($contrasena, $usuario['contrasena'])) {
        // Iniciar sesión y almacenar datos en la sesión
        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        $_SESSION['nombre'] = $usuario['nombre'];
        $_SESSION['id_rol'] = $usuario['id_rol'];

        echo "Inicio de sesión exitoso. Bienvenido, " . $usuario['nombre'] . ".";
        // Redirigir a la página de envío de reportes o panel de control
        header("Location: enviar_reporte.php");
        exit();
    } else {
        echo "Correo electrónico o contraseña incorrectos.";
    }

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Cerrar conexión
$conn = null;
?>
