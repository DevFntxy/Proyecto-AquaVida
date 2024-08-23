
<?php
// include("../barra_lateral.php");
// include ("../conexion.php");
?>

<?php
session_start();
include('../vistas/conexion.php');
if(isset($_SESSION['usuarioingresando']))
{
$usuarioingresado = $_SESSION['usuarioingresando'];
$buscandousu = mysqli_query($conn,"SELECT * FROM usuarios WHERE correo = '".$usuarioingresado."'");
$mostrar=mysqli_fetch_array($buscandousu);
	
}else
{
	header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes Recibidos</title>
    <link rel="stylesheet" href="../Css/style.css">
</head>

<style>
    body {
        background-color: #e0f7fa;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    .container {
        align-items: center;
        width: 500px;
        margin: 20px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-style: solid;
    }
    .articulo {
        background-color: #e0f7fa;
        border-left: 5px solid #00796b;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
        transition: transform 0.3s ease;
    }
    .articulo p {
        margin: 0;
        font-size: 1.1em;
        color: #455a64;
        line-height: 1.6;
    }
    .articulo b {
        color: #004d40;
        display: inline-block;
        width: 150px;
    }
    .articulo span {
        color: #00796b;
        font-weight: bold;
    }
    form {
        width: 400px;
        text-align: justify;
        margin-top: 20px;
        font-weight: bold;
        padding-left: 40px;
    }
    form input[type="submit"] {
        background-color: #00796b;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    form input[type="submit"]:hover {
        background-color: #004d40;
    }
</style>

<body>
<div class="BarraLateral">
<ul>
<div class="NomUsuario"><?php echo $mostrar['nom']?></div>
<hr>
<li><a href="../principal.php" >Inicio</a></li>
<li><a href="admin/reportes_recibidos.php">Reportes Recibidos</a></li>
<li><a href="registro.php">Registrar Usuario</a></li>
<li><a href="../usuarios_tabla.php">Mostrar Usuario</a></li>
<li><a href="../admin/actualizar_reporte.php">Actualizar Reporte</a></li>
   

<li><a href="cerrar_sesion.php" >Cerrar sesión</a></li>
</ul>
</div>

<div class="container">
<?php
if ($conn) {
    // Ejecutar la consulta
    $consulta = "SELECT * FROM reportes";
    $resultado = mysqli_query($conn, $consulta);

    if ($resultado) {
        // Iterar sobre los resultados de la consulta
        while ($row = mysqli_fetch_assoc($resultado)) {
            $nombre = $row['nombre'];
            $apellidopat = $row['apellido_paterno'];
            $apellidomat = $row['apellido_materno'];
            $telefono = $row['telefono'];
            $numtoma = $row['numero_toma'];
            $direccion = $row['direccion'];
            $tipopro = $row['tipo_problema'];
            $descripcion = $row['descripcion'];
            $fechareg = $row['fecha_registro'];
            $estado= $row['estado'];
            ?>
            <div class="articulo">
                <!-- Botón de Editar -->
                <form action="/cliente/editar_reporte.php" method="POST">
                    <p>
                        <b>Nombre:</b> <span class="nombre"><?php echo $nombre; ?></span> <br>
                        <b>Apellido Paterno:</b> <span class="apellidopat"><?php echo $apellidopat; ?></span> <br>
                        <b>Apellido Materno:</b> <span class="apellidomat"><?php echo $apellidomat; ?></span> <br>
                        <b>Teléfono:</b> <span class="telefono"><?php echo $telefono; ?></span> <br>
                        <b>Número de Toma:</b> <span class="numtoma"><?php echo $numtoma; ?></span> <br>
                        <b>Dirección:</b> <span class="direccion"><?php echo $direccion; ?></span> <br>
                        <b>Tipo de problema:</b> <span class="tipo_problema"><?php echo $tipopro; ?></span> <br>
                        <b>Descripción:</b> <span class="descripcion"><?php echo $descripcion; ?></span> <br>
                        <b>Fecha:</b> <span class="fechareg"><?php echo $fechareg; ?></span> <br>
                        <b>Estado:</b> <span class="estado"><?php echo $estado; ?></span> <br>
                    </p>
                </div>
                <br>
            </form>
            <?php
        }
    }
}
?>
</div>
</body>
</html>