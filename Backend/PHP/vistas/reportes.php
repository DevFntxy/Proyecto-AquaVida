<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> EDUAQUA</title>
    <link rel="stylesheet" href="../Css/style_reporte_principal.css">
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
    <a href="../vistas/quienes_somos.php"><b>QUIENES SOMOS</b></a>
    <a href="../vistas/edu_aqua.php"><b>EDU AQUA</b></a>
    <a href="#"><b>REPORTES</b></a>
    <a href="../vistas/login.php"><b>INICIAR SESION</b></a>
</nav>

    <main>
        <section class="text-box" style="padding-bottom: 0;">
            <h1>¿Has detectado alguna fuga de agua? ¡Repórtalo!</h1>
            <ul>
                <p style="text-align: center;">Si has notado una fuga de agua, puedes reportarla fácilmente haciendo clic en el siguiente botón:</p>
            </ul>
            <a href="../vistas/index.php" class="btn-reportar"> <b>Reportar fugas</b></a>
            <section class="image-grid">
                <h2 >COMO DETECTAR UNA FUGA DE MANERA CASERA</h2>
                <div class="image-gallery">
                    <img src="../Assets/1.png" alt="Imagen 1" class="gallery-item">
                    <img src="../Assets/2.png" alt="Imagen 2" class="gallery-item">
                    <img src="../Assets/3.png" alt="Imagen 3" class="gallery-item">
                    <img src="../Assets/4.png" alt="Imagen 4" class="gallery-item">
                    <img src="../Assets/5.png" alt="Imagen 5" class="gallery-item">
                    <img src="../Assets/6.png" alt="Imagen 6" class="gallery-item">
                </div>
            </section>
        </section>
        <section class="text-box" style="padding-bottom: 0;">
            <h1>¿Por qué es crucial reportar fugas de agua?</h1>
            <ul>
                <p>Reportar fugas de agua es crucial por varias razones que impactan tanto al medio ambiente como a la comunidad en general:</p>
            </ul>
            <ul>
                <li><strong>Conservación de Recursos Hídricos:</strong> El agua es un recurso limitado y esencial para la vida. Las fugas desperdician grandes cantidades de agua, agravando la escasez en regiones con problemas de suministro. Reportar y reparar fugas ayuda a conservar este valioso recurso y a evitar el desperdicio.</li>
                <li><strong>Prevención de Daños Estructurales:</strong> Las fugas de agua pueden causar daños significativos a la infraestructura, como la erosión del suelo, el deterioro de cimientos y daños a los sistemas de plomería. Estos problemas pueden resultar en costosas reparaciones y la necesidad de reemplazar componentes dañados. Detectar y reportar fugas a tiempo ayuda a prevenir estos daños y a mantener la integridad de las estructuras.</li>
                <li><strong>Reducción del Impacto Ambiental:</strong> El desperdicio de agua debido a fugas puede afectar negativamente a los ecosistemas acuáticos. La disminución del caudal en ríos y arroyos puede perjudicar a las plantas y animales que dependen de estos hábitats. Reportar fugas ayuda a mitigar estos efectos negativos y a proteger la biodiversidad.</li>
                <li><strong>Eficiencia en el Suministro de Agua:</strong> Las fugas pueden reducir la presión en el sistema de distribución de agua, afectando la calidad y la cantidad disponible para los consumidores. Informar sobre fugas permite a las autoridades realizar ajustes y garantizar un suministro de agua más eficiente y confiable para todos.</li>
                <li><strong>Conciencia y Responsabilidad Comunitaria:</strong> Reportar fugas fomenta una cultura de responsabilidad y cuidado del medio ambiente en la comunidad. Al participar activamente en la identificación y solución de problemas relacionados con el agua, los ciudadanos contribuyen a un entorno más sostenible y saludable.</li>
            </ul>
            <h3 style="text-align: center;">CONOCE MAS...</h3>
        </section>
        <section class="contenedor-tarjeta" style="padding-top: 0;">

            <div class="contenedor-tarjetas">

                <div class="tarjeta">
                    <figure>
                        <img src="../Assets/soxapax.jpg" alt="Soxapax Xicotepec">
                    </figure>
                    <div class="contenido-tarjeta">
                        <h3>SOXAPAX</h3>
                        <p>Nos complace presentarles a Soxapax, una empresa comprometida con la gestión y tratamiento del agua en Xicotepec, Puebla. </p>
                        <a href="https://www.sosapax.com/" target="_blank">Ir al sitio</a>

                    </div>
                </div>
                <div class="tarjeta">
                    <figure>
                        <img src="../Assets/agua_para_todos.jpg" alt="">
                    </figure>
                    <div class="contenido-tarjeta">
                        <h3>CEAP </h3>
                        <p>La CEAP es responsable de la gestión del agua en el estado de Puebla, proporcionando información sobre proyectos, infraestructura y estrategias de conservación.</p>
                        <a href="https://ceaspue.puebla.gob.mx/" target="_blank">Ir al sitio</a>
                    </div>
                </div>
                <div class="tarjeta">
                    <figure>
                        <img src="../Assets/coap.jpg" alt="Educación sobre el agua">
                    </figure>
                    <div class="contenido-tarjeta">
                        <h3>SOAPAP</h3>
                        <p>SOAPAP se encarga de la operación y mantenimiento de los servicios de agua potable y alcantarillado en Puebla, ofreciendo información sobre el servicio, tarifas y programas de conservación.</p>
                        <a href="https://www.aguapuebla.mx/" target="_blank">Ir al sitio</a>
                    </div>
                </div>
                <div class="tarjeta">
                    <figure>
                        <img src="../Assets/fdw.png" alt="Educación sobre el agua">
                    </figure>
                    <div class="contenido-tarjeta">
                        <h3>Fundacion Planet Water</h3>
                        <p>Trabaja en diversas comunidades de México para garantizar el acceso al agua limpia y potable a través de proyectos como la instalación de torres de agua en escuelas rurales y programas de educación sobre higiene.</p>
                        <a href="https://planet-water.org/?gad_source=1&gclid=Cj0KCQjwt4a2BhD6ARIsALgH7Dp5j66B2wlOUcQSi5lkaByCEP_Dw7pfP4MYny1Q5E14ofzIXTqIJE4aAqyVEALw_wcB" target="_blank">Ir al sitio</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="comentarios">
            <div class="comentarios-aquavida">
                <p style="text-align: center;color:green">¡Tu opinión es importante!</p>
                <p>En Aquavida, valoramos tu participación. Si has notado una fuga de agua o tienes sugerencias para mejorar nuestro contenido educativo, por favor comparte tus comentarios a continuación. 
                    Tu colaboración nos ayuda a cuidar el medio ambiente y a ofrecer una educación de calidad.
                    <strong></strong>
                    </p>
            </div>
            <h2>Comentarios</h2>
            <div id="comentarios-div">
                <form action="enviar_comentario.php" method="post">
                    <label for="comentario">Tu Comentario:</label>
                    <textarea id="comentario" name="comentario" rows="4" cols="50" placeholder="Escribe tu comentario aquí..."></textarea>
                    <button type="submit">Enviar Comentario</button>
                </form>
            </div>
        </section>
    </main>
</body>

</html>
<script src="../JS/main_principal.js"></script>
<?php  include("../includes/footer.php")?>