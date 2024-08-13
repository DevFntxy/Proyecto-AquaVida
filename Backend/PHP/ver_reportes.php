<?php
session_start();
// Depuración: Verificar el valor de id_rol
var_dump($_SESSION['id_rol']); // Esto imprimirá el valor de id_rol en la pantalla

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

// Obtener todos los reportes
try {
    $sql = "SELECT * FROM reportes";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $reportes = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Reportes</title>
</head>
<body>
    <h2>Todos los Reportes</h2>
    <table border="1">
        <tr>
            <th>ID Reporte</th>
            <th>Nombre Completo</th>
            <th>Teléfono</th>
            <th>Número de Toma</th>
            <th>Correo Electrónico</th>
            <th>Dirección</th>
            <th>Tipo de Problema</th>
            <th>Descripción del Problema</th>
            <th>Fecha del Reporte</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($reportes as $reporte): ?>
        <tr>
            <td><?php echo $reporte['id_reporte']; ?></td>
            <td><?php echo $reporte['nombre_completo']; ?></td>
            <td><?php echo $reporte['telefono']; ?></td>
            <td><?php echo $reporte['numero_de_toma']; ?></td>
            <td><?php echo $reporte['correo_electronico']; ?></td>
            <td><?php echo $reporte['direccion']; ?></td>
            <td><?php echo $reporte['tipo_de_problema']; ?></td>
            <td><?php echo $reporte['descripcion_del_problema']; ?></td>
            <td><?php echo $reporte['fecha_del_reporte']; ?></td>
            <td><?php echo $reporte['estado']; ?></td>
            <td>
                <form action="actualizar_estado.php" method="POST">
                    <input type="hidden" name="id_reporte" value="<?php echo $reporte['id_reporte']; ?>">
                    <select name="estado">
                        <option value="Pendiente" <?php if ($reporte['estado'] == 'Pendiente') echo 'selected'; ?>>Pendiente</option>
                        <option value="En Proceso" <?php if ($reporte['estado'] == 'En Proceso') echo 'selected'; ?>>En Proceso</option>
                        <option value="Resuelto" <?php if ($reporte['estado'] == 'Resuelto') echo 'selected'; ?>>Resuelto</option>
                    </select>
                    <input type="submit" value="Actualizar">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

<?php
// Cerrar conexión
$conn = null;
?>
