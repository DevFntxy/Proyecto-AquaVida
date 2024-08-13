<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Reporte</title>
</head>
<body>
    <h2>Enviar Reporte</h2>
    <form action="proceso_enviar_reporte.php" method="POST">
        <label for="nombre_completo">Nombre Completo:</label>
        <input type="text" name="nombre_completo" id="nombre" oninput="validarFormulario()" value="<?php echo $_SESSION['nombre']; ?>" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" oninput="validarFormulario()" oninput="validarTelefono()" required><br>
        <div id="mensaje_telefono" style="color: red;"></div>




        <label for="numero_de_toma">Número de Toma:</label>
        <input type="text" name="numero_de_toma" id="toma" oninput="validarFormulario()" required><br>


        <label for="direccion">Dirección:</label>
        <textarea name="direccion" id="direccion" oninput="validarFormulario()" required></textarea><br>

        <label for="tipo_de_problema">Tipo de Problema:</label>
        <select name="tipo_de_problema" required>
            <option value="Falta de Agua">Falta de Agua</option>
            <option value="Baja Presión">Baja Presión</option>
            <option value="Infraestructura Dañada">Infraestructura Dañada</option>
        </select><br>

        <label for="descripcion_del_problema">Descripción del Problema:</label>
        <textarea name="descripcion_del_problema" id="descripcion" oninput="validarFormulario()"></textarea><br>

        <input type="submit" value="Enviar Reporte" id="reporte" disabled >
    </form>

<script src="script.js"></script>


</body>
</html>
