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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="../Css/style.css">
    <style>
form {
    background-color: #fff;
    padding-left: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 600px;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin:auto;
}

h2 {
    padding-top: 0%;
    text-align: center;
    font-size: 40px;
    color: #007bff;
    margin-bottom: 15px;
    border-bottom: 2px solid #003c8f;
    padding-bottom: 5px;
} 
label {
    display: block;
    margin-bottom: 8px;
    color: #555;
    font-weight: bold;
}

input[type="text"],
input[type="password"],
input[type="email"] {
    width: 100%;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
    margin:auto;
}

input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus {
    border-color: #0056b3;
    outline: none;
}

#mensaje_toma {
    margin-bottom: 15px;
}

input[type="submit"] {
    background-color: #0056b3;
    color: #fff;
    border: none;
    border-radius: 4px;
    width: 100%;
    font-size: 16px;
    cursor: pointer;
    margin:auto;
}

input[type="submit"]:hover {
    background-color: #004494;
}
body{
    background-color: #e0f7fa;
}

    </style>
</head>
<body>
<div class="BarraLateral">
<ul>
<div class="NomUsuario"><?php echo $mostrar['nom']?></div>
<hr>
<li><a href="../principal.php" >Inicio</a></li>
<li><a href="reportes_recibidos.php">Reportes Recibidos</a></li>
<li><a href="#">Registrar Usuario</a></li>
<li><a href="usuarios_tabla.php">Mostrar Usuario</a></li>
<li><a href="actualizar_reporte.php">Actualizar Reporte</a></li>
   

<li><a href="../cerrar_sesion.php" >Cerrar sesión</a></li>
</ul>
</div>
    <h2>Formulario de Registro</h2>
    <form action="registro_usuario.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" oninput="validarRegistro()" required><br>

        <label for="Contraseña">Contraseña:</label>
        <input type="password" name="contraseña" id="contraseña" oninput="validarRegistro()"><br>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" name="correo" id="correo" oninput="validarRegistro()" required><br>

    
        <div id="mensaje_toma" style="color: red;"></div>

    

        <input type="submit" value="registro" name="register"  id="register">
    
    </form>

</body>
    
</html>
