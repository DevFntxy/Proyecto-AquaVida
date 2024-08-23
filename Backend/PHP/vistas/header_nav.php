<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> AQUAVIDA</title> 
    <link rel="stylesheet" href="/Css/style_general.css">

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
</head>
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
    <a href="inde.php"> <b>INICIO</b></a>
    <a href="vistas/quienes_somos.php"><b>QUIENES SOMOS</b></a>
    <a href="vistas/edu_aqua.php"><b>EDU AQUA</b></a>
    <a href="vistas/reportes.php"><b>REPORTES</b></a>
    <a href="vistas/login.php"><b>INICIAR SESION</b></a>
</nav>