<?php
session_start();
include('conexion.php');

if (isset($_SESSION['usuarioingresando'])) {
    $usuarioingresado = $_SESSION['usuarioingresando'];
    // Evitar inyección SQL usando consultas preparadas o escapando caracteres
    $usuarioingresado = mysqli_real_escape_string($conn, $usuarioingresado);
    $buscandousu = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo = '$usuarioingresado'");

    if ($buscandousu && mysqli_num_rows($buscandousu) > 0) {
        $mostrar = mysqli_fetch_array($buscandousu);
    } else {
        // Redirigir si no se encuentra el usuario
        header('Location: login.php');
        exit();
    }
} else {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>AQUAVIDA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="BarraLateral">
        <ul>
            <div class="NomUsuario"><?php echo htmlspecialchars($mostrar['nom'], ENT_QUOTES, 'UTF-8'); ?></div>
            <hr>
            <li><a href="../cliente.php">Inicio</a></li>
            <li><a href="crear_reporte.php">Realizar Reporte</a></li>
            <li><a href="seguimiento_reporte.php">Seguimiento del reporte</a></li>
            <li><a href="../cerrar_sesion.php">Cerrar sesión</a></li>
        </ul>
    </div>
</body>
</html>
