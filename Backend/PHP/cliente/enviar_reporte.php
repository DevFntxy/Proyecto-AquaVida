<?php
session_start();
include ("../conexion.php");

$mensaje = "";

if(isset($_POST{'registro'})){  //isset si estab vacio post (es variabl de php)

    if (strlen($_POST['nombre']) >= 1 && strlen ($_POST['apellidopat']) >=  1 && strlen ($_POST['apellidomat']) >=  1 && strlen ($_POST['telefono']) && strlen ($_POST['numtoma']) >=  1)  {  //sytrl va a contar los caracteres los de ese campo del name si es mayor o igual 1 e igual
        //que el email
    
    $nombre = trim($_POST['nombre']); //se crea una variable, trim vuelve a contar esos datos, elimina los espacios
    $apellidopat = trim($_POST['apellidopat']); //se rel
    $apellidomat = trim($_POST['apellidomat']); //se rel
    $telefono = trim($_POST['telefono']); //se rel
    $toma = trim($_POST['numtoma']); //se rel
    $direccion = trim($_POST['direccion']); //se rel
    $problema = trim($_POST['tipo_problema']); //se rel
    $descripcion = trim($_POST['descripcion']); //se rel


    $fechareg = date ("d/m/y"); //mismo proceso

    $estado = ("pendiente"); //se rel
    $correo_usuario = $_SESSION['usuarioingresando'];


    $consulta = "INSERT INTO reportes(nombre,apellido_paterno,apellido_materno,telefono,numero_toma,direccion,tipo_problema,descripcion,fecha_registro,estado,correo_usuario) 
    VALUES ('$nombre','$apellidopat','$apellidomat','$telefono','$toma' ,'$direccion','$problema','$descripcion','$fechareg','$estado','$correo_usuario')";  //se crea una variabler donde se crea una consulta para insertar
    $resultado = mysqli_query($conn,$consulta); 
      if($resultado){ 
        echo '<h3 class="ok">¡Se ha guardado tu formulario!</h3>';
      } else{ //si no arroja un error
         
        echo'<h3 class="bad">¡Ups, ha ocurrido un error al guardar los datos!</h3>';
        
       }
     } else {
        echo'<h3 class="bad">¡Por favor completa todos los campos!</h3>';
  
      }
    
    }
    
    
    
    ?>












    