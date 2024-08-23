<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> EDUAQUA</title>
  <link rel="stylesheet" href="Css/style_inicio.css">
  <link rel="stylesheet" href="Css/style_general.css">
  <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
}
.header-aquavida {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    position: static;
    z-index: 1000;
}
.container-logo {
    display: flex;
    align-items: center;
}
.logo {
    max-height: 60px; 
}
.header-aquavida > div:last-child {
    display: flex;
    gap: 15px;
    align-items: center;
}
.header-aquavida img {
    max-height: 40px; 
    object-fit: contain; 
}
nav {
    display: flex;
    justify-content: space-around;
    background-color: #007bff;
    padding: 10px 0;
    font-family: Arial, sans-serif;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
    transition: background-color 0.3s ease;
}
nav a {
    color: white;
    text-decoration: none;
    padding: 15px 20px;
    font-weight: bold;
    transition: color 0.3s ease, background-color 0.3s ease, transform 0.3s ease;
    position: relative;
    border-radius: 5px;
    overflow: hidden;
}
nav a:hover {
    color: #ffcc00;
    background-color: rgba(255, 255, 255, 0.2);
    transform: scale(1.1);
}
nav a.active {
    color: #ffcc00;
    background-color: rgba(255, 255, 255, 0.3);
}
nav a::before {
    content: '';
    position: absolute;
    left: 50%;
    bottom: -5px;
    width: 0;
    height: 3px;
    background-color: #ffcc00;
    transition: width 0.3s ease, left 0.3s ease;
}
nav a:hover::before,
nav a.active::before {
    width: 100%;
    left: 0;
}
nav.scrolled {
    background-color: #0056b3;
}
nav a b {
    font-size: 16px;
    transition: color 0.3s ease;
}
nav a:hover b {
    color: #ffcc00;
}
@media screen and (max-width: 768px) {
    .header-aquavida {
        flex-direction: column;
        align-items: flex-start;
        padding: 10px;
    }
    .container-logo {
        justify-content: center;
        width: 100%;
    }
    .logo {
        max-height: 50px;
    }
    nav {
        flex-direction: column;
        align-items: flex-start;
        padding: 5px 0;
    }
    nav a {
        padding: 10px 15px;
        font-size: 14px;
    }
    nav a:hover {
        transform: scale(1.05);
    }
    .header-aquavida > div:last-child {
        flex-direction: column;
        gap: 10px;
        width: 100%;
        justify-content: center;
    }
}
       </style>
</head>
<body>
<header class="header-aquavida">
        <div class="container-logo">
          <h1 style="font-size: 30px ;color:#007bff">PRINCIPAL</h1>
          <a href="../inde.php">
    <img src="../Assets/ahorrar-agua.png" alt="Logo Aquavida" class="logo">
</a>
        </div>
        <div>
            <img src="Assets/facebook.png" alt="">
            <img src="Assets/logotipo-de-instagram.png" alt="">
            <img src="Assets/gorjeo.png" alt="">
            <img src="Assets/logotipo-de-gmail.png" alt="">
            
        </div>
    </header>
  <nav>
    <a href="#"> <b>INICIO</b></a>
    <a href="vistas/quienes_somos.php"><b>QUIENES SOMOS</b></a>
    <a href="vistas/edu_aqua.php"><b>EDU AQUA</b></a>
    <a href="vistas/reportes.php"><b>REPORTES</b></a>
    <a href="vistas/login.php"><b>INICIAR SESION</b></a>
</nav>
  <main>
    <div class="carousel-container">
      <div class="carousel-slide">
      <img src="Assets/CARRUCEL3.png" alt="Image 1">
        <img src="Assets/Blue Gradient Modern Group Project Presentation.png" alt="Image 2">
        <img src="Assets/carrucel1-1.jpg" alt="Image 3">
      </div>
      <div class="fila1">
        <div class="Texto">
          <h1>
            Aqua Vida: Innovación y Sostenibilidad en la Gestión del Agua
          </h1>
          <p>
            En un mundo donde la conservación de los recursos naturales es más
            crucial que nunca, Aqua Vida surge como un proyecto universitario
            comprometido con el bienestar de nuestra comunidad. Nuestro
            sistema de control de agua y reporte de fugas está diseñado para
            empoderar a los ciudadanos, brindándoles herramientas efectivas
            para monitorear el uso del agua y reportar cualquier anomalía en
            la red de distribución
          </p>
          <p>
            A través de una plataforma accesible y fácil de usar, los usuarios
            podrán obtener generar reportes acerca de fugas y problemas de
            agua , ademas de poder acceder a recursos educativos sobre el uso
            responsable del agua. Juntos, podemos hacer una diferencia
            significativa en la conservación de este recurso vital. Aqua Vida
            no solo se enfoca en la detección y gestión de fugas, sino que
            también promueve la participación activa de la comunidad.
          </p>
        </div>
        <div class="Imagen_1">
          <img src="Assets/Imagen1.png" alt="Imagen Destacada" />
        </div>
      </div>
      <div class="fila2" >
        <div class="Imagen_1">
          <img src="Assets/Imagen2.png" alt="Imagen Destacada" />
        </div>
        <div class="Texto" style="padding: 20px;" >
          <h1 style="color: #007bff;">Un Futuro Sostenible a Través de la Participación Ciudadana</h1>
          <p >
            A través de nuestra plataforma, los ciudadanos pueden reportar problemas de manera sencilla, contribuyendo así a una respuesta más rápida y eficiente por parte de las autoridades locales. Este sistema no solo optimiza la gestión de incidencias, sino que también permite a los usuarios hacer un seguimiento en tiempo real de las soluciones implementadas, generando mayor transparencia y confianza en el proceso.
            Además, fortaleceremos el vínculo entre la tecnología y la comunidad, promoviendo una cultura de participación activa y responsabilidad compartida. En Aqua Vida, creemos firmemente que la colaboración y la innovación son clave para construir un futuro más sostenible. Nuestra visión es empoderar a las comunidades, proporcionando las herramientas necesarias para que cada ciudadano sea un agente de cambio en su entorno.

            Con esta iniciativa, no solo buscamos resolver problemas actuales, sino también anticiparnos a los desafíos del mañana, creando un entorno más resiliente y adaptable para todos. La sostenibilidad no es solo una meta, es un camino que recorremos juntos, donde cada acción cuenta y cada voz importa.

          <p> <b> Únete a nosotros en este
              esfuerzo por mejorar la gestión del agua en nuestra ciudad y
              garantizar un entorno más saludable para todos.</b></p>
          </p>
        </div>
      </div>
  </main>
</body>

</html>
<script src="../JS/main_principal.js"></script>
<?php  include("vistas/footer.php")?>