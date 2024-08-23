<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> EDUAQUA</title>
    <link rel="stylesheet" href="Css/style_quienes_s.css">
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
    position:static;
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
    </style>
<body>
<header class="header-aquavida">
        <div class="container-logo">
          <h1 style="font-size: 30px ;color:#007bff">AQUAVIDA</h1>
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
    <a href="../inde.php"> <b>INICIO</b></a>
    <a href="#"><b>QUIENES SOMOS</b></a>
    <a href="../vistas/edu_aqua.php"><b>EDU AQUA</b></a>
    <a href="../vistas/reportes.php"><b>REPORTES</b></a>
    <a href="../vistas/login.php"><b>INICIAR SESION</b></a>
</nav>

    <main class="quienes_somos">
        <div class="carousel-container">
            <div class="carousel-slide">
            <img src="../Assets/qs.png" alt="Image 2">
                <img src="../Assets/Blue Gradient Modern Group Project Presentation.png" alt="Image 2">
                <img src="../Assets/CARRUCEL3.png" alt="Image 1">
                <img src="../Assets/carrucel1-1.jpg" alt="Image 3">
            </div>
            <div class="Texto" style="padding-top: 20px;">
                <h2>¿COMO SURGIO AQUAVIDA?</h2>
                <p>
                    AQUAvidaq comenzó como un proyecto universitario
                    que llevamos a cabo un grupo de compañeros apasionados
                    por la sostenibilidad y el acceso al agua potable.
                    Durante nuestras clases, nos dimos cuenta de los desafíos
                    ambientales y sociales que muchas comunidades enfrentan
                    debido a la falta de acceso a agua limpia, y decidimos hacer algo al respecto.
                </p>
            </div>
            <div class="container-textos" style="border-radius: 15px;">
                <div class="Texto_2">
                    <h2>Visión de Aqua Vida:</h2>
                    <img src="../Assets/objetivo.png" alt="">
                    <p style="text-align: justify;">
                    En AquaVida, transformamos la gestión del agua facilitando el reporte de fugas y educando sobre el uso responsable del agua. Nuestra tecnología ofrece herramientas interactivas para promover prácticas sostenibles y garantizar un entorno saludable para el futuro. Colaboramos con comunidades, industrias y gobiernos para preservar la calidad del agua y asegurar un futuro con aguas limpias y ecosistemas saludables.
                    </p>
                </div>
                <div class="Texto_2">
                    <h2>Vision de Aqua Vida</h2>
                    <img src="../Assets/enfocar.png" alt="">
                    <p  style="text-align: justify;">
                        En AquaVida, nos dedicamos a preservar y proteger los recursos acuáticos mediante soluciones innovadoras. Mejoramos la calidad del agua y los ecosistemas a través de prácticas sostenibles y tecnologías avanzadas, colaborando con comunidades, industrias y gobiernos para promover una gestión responsable del agua. Nuestro objetivo es educar sobre la conservación del agua y fomentar prácticas que garanticen un futuro con aguas limpias y ecosistemas saludables.

                    </p>
                </div>
                <div class="Texto_2">
                    <h2>Quienes somos</h2>
                    <img src="../Assets/acerca-de.png" alt="">
                    <p style="text-align: justify;">
                    Somos un equipo universitario de la <a href="https://utxicotepec.edu.mx/" target="_blank"><strong> Universidad Tecnológica de Xicotepec de Juárez</strong></a>, trabajando con ATL SOFTWARE bajo la iniciativa "Company of Technology Environment". Transformamos ideas en soluciones tecnológicas prácticas y sostenibles, con el objetivo de resolver problemas actuales y contribuir al medio ambiente. Este proyecto, desarrollado en colaboración con ATL SOFTWARE, forma parte de nuestra formación académica y busca innovar tecnológicamente para mejorar la calidad de vida y promover el desarrollo sostenible.
                    </p>
                </div>
            </div>
            <section class="video-box">
                <iframe
                    src="https://www.youtube.com/embed/hKptuuhCGqc"
                    title="QUE SON LAS FUGAS?"
                    frameborder="0"
                    width="560"
                    height="315"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </section>

            <div class="Texto_3">
                <h2>Sistema AQUA VIDA</h2>
                <p>
                    AquaVida ofrece un sistema avanzado para detectar y reportar fugas en las redes de distribución de agua.
                    Nuestra plataforma, accesible y fácil de usar, permite a los usuarios monitorear su consumo de agua en
                    tiempo real, recibir alertas sobre posibles fugas y acceder a recursos educativos sobre el uso
                    responsable del agua. Únete a nosotros en la mejora de la gestión del agua y contribuye a un entorno más
                    saludable. Juntos, podemos hacer una diferencia significativa en la conservación de nuestros recursos
                    acuáticos. Descubre cómo ser parte del cambio hoy mismo.
                </p>
            </div>
    </main>
</body>

</html>
<script src="../JS/main_principal.js"></script>
<?php  include("../vistas/footer.php")?>
