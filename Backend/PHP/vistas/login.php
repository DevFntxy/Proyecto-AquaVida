<?php
session_start();

include('conexion.php');

// if (isset($_SESSION['usuarioingresando'])) {
//     header('location: principal.php');
// }

if (isset($_POST['btningresar'])) {
    $correo = $_POST["txtcorreo"];
    $pass = $_POST["txtpassword"];

    $buscandousu = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo = '".$correo."' and pass = '".$pass."'");
    $nr = mysqli_num_rows($buscandousu);

    if ($nr == 1) {
        $_SESSION['usuarioingresando'] = $correo;

        if ($correo == "admin@gmail.com") {
            header("Location: ../admin/principal.php");
        } else {
            header("Location: ../cliente/cliente.php");
        }
    } else if ($nr == 0) {
        echo "<script>alert('Usuario no existe');window.location= 'login.php'</script>";
    }
}
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> INICIAR SESION</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../Css/style_general.css">
<style>
/* Estilo general del contenedor del formulario */
.FormCajaLogin {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: #f0f0f0;
    padding: 20px;
}

.FormLogin {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 400px;
    width: 100%;
}

h1 {
    font-family: 'Arial', sans-serif;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

.TextoCajas {
    font-family: 'Arial', sans-serif;
    color: #555;
    margin-bottom: 5px;
    font-size: 14px;
}

.CajaTexto {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

.CheckBox1 {
    margin-bottom: 15px;
}

.CheckBox1 input[type="checkbox"] {
    margin-right: 10px;
}

.BtnLogin {
    background: #007BFF;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    padding: 10px;
    font-size: 16px;
    cursor: pointer;
    width: 100%;
    transition: background 0.3s ease;
}

.BtnLogin:hover {
    background: #0056b3;
}

.BtnRegistrar {
    display: block;
    text-align: center;
    font-size: 14px;
    color: #007BFF;
    text-decoration: none;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #007BFF;
    transition: background 0.3s ease, color 0.3s ease;
}

.BtnRegistrar:hover {
    background: #007BFF;
    color: #ffffff;
}

hr {
    border: 0;
    border-top: 1px solid #ccc;
    margin: 20px 0;
}

    
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
    <a href="../inde.php"> <b>INICIO</b></a>
    <a href="quienes_somos.php"><b>QUIENES SOMOS</b></a>
    <a href="edu_aqua.php"><b>EDU AQUA</b></a>
    <a href="reportes.php"><b>REPORTES</b></a>
    <a href="#"><b>INICIAR SESION</b></a>
</nav>
<div class="FormCajaLogin">
    <div class="FormLogin">
        <form method="POST">
            <h1>Iniciar sesión</h1>
            <br>
            <div class="TextoCajas">• Ingresar correo</div>
            <input type="text" name="txtcorreo" class="CajaTexto" required>
            <div class="TextoCajas">• Ingresar password</div>
            <input type="password" id="txtpassword" name="txtpassword" class="CajaTexto" required>       
            <div class="CheckBox1">
                <input type="checkbox" onclick="verpassword()">Mostrar password
            </div>
            <div>
                <input type="submit" value="Iniciar sesión" class="BtnLogin" name="btningresar">
            </div>
            <hr>
            <br>
            <div>
                <a href="usuarios_registrar.php" class="BtnRegistrar">Crea nueva cuenta</a>
            </div>

        </form>
    </div>
</div>

<script>
function verpassword() {
    var tipo = document.getElementById("txtpassword");
    if (tipo.type == "password") {
        tipo.type = "text";
    } else {
        tipo.type = "password";
    }
}
</script>
 <script src="/JavaScript/main_principal.js"></script>
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
                    <li><a href="inde.php">Inicio</a></li>
                    <li><a href="../vistas/quienes_somos.php">Quienes somos</a></li>
                    <li><a href="../vistas/edu_aqua.php">Edu Aqua</a></li>
                    <li><a href="../vistas/reportes.php">Comunidad </a></li>
                    <li><a href="../vistas/inicio_sesion.php">Inicio de sesion</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Síguenos en nuestras redes sociales</h4>
                <ul class="social-media">
                    <li>
                        <a href="https://www.facebook.com"><img src="../Assets/facebook (1).png" alt="Facebook" /></a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com"><img src="../Assets/logotipos.png." alt="Twitter" /></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com"><img src="../Assets/instagram.png" alt="Instagram" /></a>
                    </li>
                    <li>
                        <a href="https://www.tiktok.com"><img src="../Assets/tik-tok.png" alt="TikTok" /></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Aqua Vida. Todos los derechos reservados.</p>
        </div>
    </footer>
</html>

