<?php
session_start();

include('../vistas/conexion.php');


$usuarioingresado = $_SESSION['usuarioingresando'];
$buscandousu = mysqli_query($conn,"SELECT * FROM usuarios WHERE correo = '".$usuarioingresado."'");
$mostrar=mysqli_fetch_array($buscandousu);

?>

<html>
<title>AQUAVIDA</title>
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
<li><a href="../cliente.php" >Inicio</a></li>
<li><a href="crear_reporte.php" >Realizar Reporte</a></li>
<li><a href="seguimiento_reporte.php" >Seguimiento del reporte</a></li>

<li><a href="../vistas/cerrar_sesion.php" >Cerrar sesión</a></li>
</ul>
</div>
<h1 id="title">Bienvenido a AquaVida</h1>

<div class="content">
    <p>Bienvenido a AquaVida, tu aliado en la gestión eficiente del agua en Xicotepec de Juárez, Puebla. Estamos comprometidos a asegurar un suministro de agua sostenible y responsable, contribuyendo a un futuro mejor para nuestra comunidad.</p>

    <div class="images">
    <img src="../Assets/CARRUCEL3.png" alt="Image 1">
        <img src="../Assets/Blue Gradient Modern Group Project Presentation.png" alt="Image 2">
        <img src="../Assets/carrucel1-1.jpg" alt="Image 3">
    </div>

    
    <p>Tu participación es clave para un uso eficiente y equitativo del agua. Aquí puedes revisar los reportes y contribuir al cuidado de este recurso vital. ¡Gracias por formar parte de AquaVida!</p>
</div>

<script>
    const titles = ["Bienvenido a AquaVida", "Tu aliado en la gestión del agua", "Juntos por un futuro sostenible"];
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

</div>
</div>
</body>
</html>