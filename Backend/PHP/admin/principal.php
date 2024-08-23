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
	header('location: ../vistas/login.php');
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida Admin</title>
    <link rel="stylesheet" href="../Css/style.css">
    <style>
        body {
           
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        h1 {
            font-size: 3em;
            color: #007bff;
            text-align: center;
            transition: opacity 0.5s ease-in-out;
            margin-bottom: 0.5em;
        }

        .content {
            max-width: 800px;
            text-align: center;
            margin: 20px;
        }

        .content p {
            font-size: 1.2em;
            color: #555;
            line-height: 1.6;
			text-align:justify;
        }

        .images {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }

        .images img {
            width: 200px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        
    </style>
</head>
<body>


<div class="BarraLateral">
<ul>
<div class="NomUsuario"><?php echo $mostrar['nom']?></div>
<hr>
<li><a href="#" >Inicio</a></li>
<li><a href="reportes_recibidos.php">Reportes Recibidos</a></li>
<li><a href="registro.php">Registrar Usuario</a></li>
<li><a href="usuarios_tabla.php">Mostrar Usuario</a></li>
<li><a href="actualizar_reporte.php">Actualizar Reporte</a></li>
   

<li><a href="../vistas/cerrar_sesion.php" >Cerrar sesión</a></li>
</ul>
</div>

<div class="content">
    <p>Bienvenido a AquaVida, tu plataforma para la gestión eficiente del agua en Xicotepec de Juárez, Puebla. Nuestro objetivo es garantizar un uso sostenible y responsable del recurso hídrico, asegurando un futuro próspero para nuestra comunidad.</p>

    <div class="images">
    <img src="../Assets/Blue Gradient Modern Group Project Presentation.png" style="width:300px; heiht:300px" alt="Image 2">
    <img src="../Assets/carrucel1-1.jpg" alt="Image 3" style="width:400px" >
    </div>

    <p >Llevar un control detallado y preciso de los reportes es fundamental para identificar problemas, tomar decisiones informadas y asegurar la distribución equitativa del agua. Aquí podrás visualizar y gestionar reportes sobre el estado del agua, consumo, y otros aspectos clave para mantener la sustentabilidad.</p>
</div>

<script>
    const titles = ["Hola Admin", "Bienvenido a AquaVida", "Gestionemos el agua juntos"];
    let index = 0;

    setInterval(() => {
        index = (index + 1) % titles.length;
        const titleElement = document.getElementById('title');
        titleElement.style.opacity = 0;
        setTimeout(() => {
            titleElement.textContent = titles[index];
            titleElement.style.opacity = 1;
        }, 500);
    }, 3000);
</script>

</body>
</html>
