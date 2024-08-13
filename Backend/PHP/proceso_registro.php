<?php
// Conexión a la base de datos
$host = 'localhost';
$dbname = 'aqua';
$username = 'root';  // Cambiar según la configuración
$password = '';      // Cambiar según la configuración

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// Recibir datos del formulario
// Recibir datos del formulario
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : ''; // Línea 16
$apellido_paterno = isset($_POST['apellido_paterno']) ? $_POST['apellido_paterno'] : ''; // Línea 17
$apellido_materno = isset($_POST['apellido_materno']) ? $_POST['apellido_materno'] : ''; // Línea 18
$correo = isset($_POST['correo']) ? $_POST['correo'] : ''; // Línea 19
$numero_de_toma = isset($_POST['numero_de_toma']) ? $_POST['numero_de_toma'] : ''; // Línea 20
$contrasena = isset($_POST['contrasena']) ? password_hash($_POST['contrasena'], PASSWORD_BCRYPT) : ''; // Línea 21
$codigo_secreto = isset($_POST['codigo_secreto']) ? $_POST['codigo_secreto'] : ''; // Línea 22


// Condición especial (conocida solo por el administrador)
$codigo_administrador = "admin123"; // Ejemplo de código estático

// Asignar rol basado en la condición
if ($codigo_secreto === $codigo_administrador) {
    $id_rol = 2; // Administrador
} else {
    $id_rol = 1; // Cliente
}

// Insertar el nuevo registro en la base de datos
try {
    $sql = "INSERT INTO registro (nombre, apellido_paterno, apellido_materno, correo_electronico, numero_de_toma, contrasena, id_rol) 
            VALUES (:nombre, :apellido_paterno, :apellido_materno, :correo, :numero_de_toma, :contrasena, :id_rol)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellido_paterno', $apellido_paterno);
    $stmt->bindParam(':apellido_materno', $apellido_materno);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':numero_de_toma', $numero_de_toma);
    $stmt->bindParam(':contrasena', $contrasena);
    $stmt->bindParam(':id_rol', $id_rol);

    $stmt->execute();

    echo "Registro exitoso. El rol asignado es: " . ($id_rol == 2 ? "Administrador" : "Cliente");

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Cerrar conexión
$conn = null;
?>
