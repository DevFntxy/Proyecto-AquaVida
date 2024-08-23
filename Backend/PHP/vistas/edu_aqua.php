<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> EDUAQUA</title> 
    <link rel="stylesheet" href="../Css/style_eduaqua.css">
    <link rel="stylesheet" href="../Css/style_general.css">
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
}

    <body>
    <header class="header-aquavida">
        <div class="container-logo">
          <h1 style="font-size: 30px ;color:#007bff">EDU AQUA</h1>
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
    <a href="#"><b>EDU AQUA</b></a>
    <a href="../vistas/reportes.php"><b>REPORTES</b></a>
    <a href="../vistas/login.php"><b>INICIAR SESION</b></a>
</nav>
    <main   >
    <div class="carousel-container">
      <div class="carousel-slide">
      <img src="../Assets/CARRUCEL3.png" alt="Image 1">
        <img src="../Assets/Blue Gradient Modern Group Project Presentation.png" alt="Image 2">
        <img src="../Assets/carrucel1-1.jpg" alt="Image 3">
      </div>
        <div class="container-edu" >
            <section class="text-box">
                <h1>Un Llamado a la Conciencia</h1>
                <p>
                    El agua es esencial para la vida y afecta a la salud, la agricultura, la industria y el bienestar de
                    las comunidades. A pesar de su importancia, a menudo no somos conscientes del gran desperdicio de
                    agua causado por fugas y prácticas inadecuadas. Las fugas, que pueden ocurrir tanto en tuberías
                    domésticas como en redes de distribución, no solo impactan el suministro local, sino también los
                    ecosistemas y el equilibrio hídrico global.
                    Es crucial entender el impacto de estas fugas y promover una mayor conciencia sobre la gestión del
                    agua. La educación y la información sobre el uso responsable son fundamentales para prevenir el
                    desperdicio y fomentar prácticas sostenibles. Adoptando tecnologías y soluciones innovadoras,
                    podemos reducir el desperdicio de agua y asegurar su disponibilidad futura, contribuyendo así a la
                    conservación del medio ambiente.
                </p>
            </section>
            <section class="video-box">
                <iframe 
                src="https://www.youtube.com/embed/wBewb6I6sVk" 
                title="QUE SON LAS FUGAS?" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>            
            </section>
            <div class="container-textos">
                <div class="Texto_2">
                    <h1>¿Qué Son las Fugas de Agua?</h1>
                    <p>
                        Las fugas de agua se producen cuando el agua escapa de un sistema de distribución debido a
                        fallos en tuberías, conexiones, grifos u otros componentes del sistema hidráulico. Estos
                        fallos pueden variar en tamaño y severidad, desde pequeñas goteras en un grifo hasta grandes
                        roturas en tuberías subterráneas.
                        Aunque cada fuga individual pueda parecer menor e incluso insignificante, el impacto
                        acumulado de estas fugas puede ser considerable. A medida que las fugas persisten y se
                        multiplican, pueden resultar en pérdidas significativas de agua, que no solo afectan el
                        suministro de agua local, sino que también pueden causar daños a infraestructuras y aumentar los
                        costos de mantenimiento.
                        La magnitud del desperdicio de agua causado por estas fugas es a menudo subestimada, pero su
                        efecto acumulativo puede tener graves consecuencias para el entorno, los recursos hídricos y la
                        economía.
                    </p>

                </div>
                <div class="Texto_2" >

                    <h1>Impacto de las Fugas de Agua</h1>

                    <ul>
                        <li>
                            <strong>Desperdicio de Recursos:</strong> Las fugas representan
                            una pérdida significativa de agua, que podría haber sido utilizada
                            para consumo humano, riego de cultivos o usos industriales. El
                            desperdicio de agua contribuye a la escasez de este recurso
                            esencial, especialmente en regiones propensas a la sequía.
                        </li>
                        <li>
                            <strong>Daños a Infraestructura:</strong> Las fugas, especialmente
                            las no detectadas a tiempo, pueden causar daños a la
                            infraestructura. El agua que se filtra puede erosionar suelos,
                            dañar cimientos y estructuras, y provocar problemas costosos en la
                            reparación y mantenimiento.
                        </li>
                        <li>
                            <strong>Impacto Ambiental:</strong> El desperdicio de agua también
                            tiene un efecto negativo en el medio ambiente. La reducción del
                            caudal de ríos y arroyos debido a fugas en sistemas de
                            distribución puede afectar a los ecosistemas acuáticos y a la
                            biodiversidad.
                        </li>
                    </ul>
                    
                </div>
                
            </div>      
            <section class="text-box"style=" padding-top: 0%;">
            <h1 style=" padding-top: 0%;">Impacto de las Fugas de Agua</h1>
                <p>Las fugas de agua no solo representan un desperdicio significativo de recursos, sino que también
                    pueden tener
                    impactos negativos en la infraestructura y el medio ambiente. Es fundamental que tanto individuos
                    como
                    comunidades adopten prácticas de conservación del agua y utilicen tecnologías de detección para
                    abordar este
                    problema de manera efectiva. Al tomar medidas para prevenir y reparar fugas, cada uno de nosotros
                    contribuye a
                    un futuro más sostenible y a la protección de este recurso invaluable.</p>
        </div>
    </main>
    </body>  
    <footer class="footer" style="background-color:  #007bff">
        <div class="footer-container">
            <div class="footer-section" style="padding-left: 20px;">
                <h4>Contacto</h4>
                <p>Conservando el agua, protegiendo el futuro.</p>
                <br />
                <p>Teléfono: +52 (123) 456-7890</p>
                <br />
                <p>Email: info@aquavida.com</p>
            </div>
            <div class="footer-section" style="padding-left: 40px;">
                <h4>Enlaces Rápidos</h4>
                <ul class="ancla">
                    <li><a href="../inde.php">Inicio</a></li>
                    <li><a href="../vistas/quienes_somos.php">Quienes somos</a></li>
                    <li><a href="#">Edu Aqua</a></li>
                    <li><a href="../vistas/reportes.php">Comunidad </a></li>
                    <li><a href="../vistas/inicio_sesion.php">Inicio de sesion</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Síguenos en nuestras redes sociales</h4>
                <ul class="social-media">
                    <li>
                        <a href="https://www.facebook.com"><img src="Assets/facebook (1).png" alt="Facebook" /></a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com"><img src="Assets/logotipos.png." alt="Twitter" /></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com"><img src="Assets/instagram.png" alt="Instagram" /></a>
                    </li>
                    <li>
                        <a href="https://www.tiktok.com"><img src="Assets/tik-tok.png" alt="TikTok" /></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Aqua Vida. Todos los derechos reservados.</p>
        </div>
    </footer>
 </html>
 <script src="../JS/main_principal.js"></script>
