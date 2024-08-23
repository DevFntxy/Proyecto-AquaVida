<?php
session_start();
include('conexion.php');
if(isset($_SESSION['usuarioingresando']))
{
	header('location: principal.php');
}
?>
<html>
<head>
<title>VaidrollTeam</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="FormCajaLogin">

<div class="FormLogin">
<form method="post">
<h1>Crear nueva cuenta</h1>
<br>

<div class="TextoCajas">• Ingresar nombre</div>
<input type="text" name="txtnombre" class="CajaTexto" required>

<div class="TextoCajas">• Ingresar Apellido Paterno</div>
<input type="text" name="txtapellidiopaterno" class="CajaTexto" required>
<div class="TextoCajas">• Ingresar Apellido Materno</div>
<input type="text" name="txtapellidiomaterno" class="CajaTexto" required>


<div class="TextoCajas">• Ingresar Direccio</div>
<input type="text" name="txtdireccion" class="CajaTexto" required>

<div class="TextoCajas">• Ingresar Telefono</div>
<input type="number" name="txttelefono" class="CajaTexto" required>



<div class="TextoCajas">• Ingresar correo</div>
<input type="email" name="txtcorreo" class="CajaTexto" required>



<div class="TextoCajas">• Ingresar password</div>
<input type="password" id="txtpassword" name="txtpassword" class="CajaTexto" required>
 
<div class="CheckBox1">
<input type="checkbox" onclick="verpassword()" >Mostrar password
</div>
 
<div>
<input type="submit" value="Crea nueva cuenta" class="BtnRegistrar" name="btnregistrar">
</div>
<hr>
<br>
<div >
<a href="login.php" class="BtnLogin">Regresar</a>
</div>

</div>
</form>
</div>
 
</body>
<script>
  function verpassword(){
      var tipo = document.getElementById("txtpassword");
      if(tipo.type == "password")
	  {
          tipo.type = "text";
      }
	  else
	  {
          tipo.type = "password";
      }
  }
</script>
</html>
<?php

if(isset($_POST["btnregistrar"]))
{

$nombre = $_POST["txtnombre"];
$apellidopaterno=$_POST["txtapellidiopaterno"];
$apellidomaterno=$_POST["txtapellidiomaterno"];
$direccion = $_POST["txtdireccion"];
$telefono = $_POST["txttelefono"];
$correo = $_POST["txtcorreo"];
$pass 	= $_POST["txtpassword"];
$fecha = date('Y-m-d');
$toma = ('0');


$insertarusu = mysqli_query($conn,"INSERT INTO usuarios(nom,apellidopaterno,apellidomaterno,telefono,numero_toma,direccion,correo,pass,fecha_reg) 
values ('$nombre','$apellidopaterno','$apellidomaterno','$telefono','$toma','$direccion','$correo','$pass','$fecha')");
	
if(!$insertarusu)
{
echo "<script>alert('Correo duplicado, intenta con otro correo');</script>";
		 
}
else
{
echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='login.php' </script>";
}
} 
?>