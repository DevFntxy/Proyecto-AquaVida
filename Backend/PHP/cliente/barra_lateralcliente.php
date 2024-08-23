<?php
session_start();
include('conexion.php');
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

<html>
<head>
<title>AQUAVIDA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style.css">
	
</head>
<body>
<div class="BarraLateral">
<ul>
<div class="NomUsuario"><?php echo $mostrar['nom']?></div>
<hr>
<li><a href="../cliente.php" >Inicio</a></li>
<li><a href="cliente/crear_reporte.php" >Realizar Reporte</a></li>
<li><a href="cliente/seguimiento_reporte.php" >Seguimiento del reporte</a></li>

<li><a href="../cerrar_sesion.php" >Cerrar sesión</a></li>
</ul>
</div>
</body>
</html>