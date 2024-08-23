
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
    <title>Registrar Datos</title>
    <link rel="stylesheet" href="../Css/style.css">
	
  <style>
   
 form {
    width: 60%;
    margin: 0 auto;
    background-color: rgba(200, 212, 214, 0.8);
    padding: 32px;
    border-radius: 12px;
    display: flex;
    flex-direction: column;
}
form h1 {
    font-family: Arial, Helvetica, sans-serif;
    color: #221363;
    font-size: 40px; 
    text-align: center;
    font-weight: bold;
}
form label {
    color: #45be26;
    font-size: 19px; 
    font-weight: bold;
    margin-bottom: 8px; 
    display: block;
    font-family: Arial, Helvetica, sans-serif;
}
form input[type="text"],
form input[type="number"],
form select {
    width: 100%;
    padding: 12px; 
    font-size: 16px; 
    color: #000000;
    border: 1px solid #000000;
    border-radius: 6px;
    margin-bottom: 16px; 
    box-sizing: border-box;
    background-color: rgba(255, 255, 255, 0.6);
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}
form input:focus,
form select:focus {
    border-color: #3498db;
    outline: none;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
}
form input[type="submit"] {
    width: 100%;
    padding: 16px; 
    font-size: 19px; 
    font-weight: 600;
    color: #ffffff;
    background-color: #27ae60;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
    margin-top: 24px; 
    text-transform: uppercase;
}
form input[type="submit"]:hover {
    background-color: #218c53;
    transform: translateY(-2px);
}
form input[type="hidden"] {
    display: none;
}
form>a {
    text-decoration:none;
    text-align:center;
    font-size:100px;
    width: 95%;
    padding: 16px; 
    font-size: 23px; 
    font-weight: 600;
    color: #ffffff;
    background-color: #27ae60;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
    margin-top: 24px; 
    text-transform: uppercase;
}
form>a:hover {
    background-color: #218c53;
    transform: translateY(-2px);
}
form input[type="hidden"] {
    display: none;
}
  </style>
</head>
<body>
<div class="BarraLateral">
<ul>
<div class="NomUsuario"><?php echo $mostrar['nom']?></div>
<hr>
<li><a href="cliente.php" >Inicio</a></li>
<li><a href="#" >Realizar Reporte</a></li>
<li><a href="seguimiento_reporte.php" >Seguimiento del reporte</a></li>

<li><a href="../vistas/cerrar_sesion.php" >Cerrar sesión</a></li>
</ul>
</div>
   
    <form action="enviar_reporte.php" method="post">
        <h1>Registrar tus datos</h1>
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre" required>

        <label for="apellidopat">Apellido Paterno:</label>
        <input type="text" name="apellidopat" id="apellidopat" placeholder="Ingresa tu apellido paterno" required>

        <label for="apellidomat">Apellido Materno:</label>
        <input type="text" name="apellidomat" id="apellidomat" placeholder="Ingresa tu apellido materno" required>

        <label for="telefono">Teléfono:</label>
        <input type="number" name="telefono" id="telefono" placeholder="Ingresa tu teléfono" required>

        <label for="numtoma">Número de Toma:</label>
        <input type="number" name="numtoma" id="numtoma" placeholder="Ingresa tu número de toma" required>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" placeholder="Ingresa tu dirección" required>

        <label for="tipo_problema">Tipo de Problema:</label>
        <select id="tipo_problema" name="tipo_problema" required>
            <option value="fuga_agua">Falta de Agua</option>
            <option value="baja_presion">Baja Presión</option>
            <option value="infraestructura_danada">Infraestructura Dañada</option>
        </select>

        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" id="descripcion" placeholder="Describe el problema" required>

<input type="submit" name="registro" value="Registrar">
   
    </form>
</body>
</html>
