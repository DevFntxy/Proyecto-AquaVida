
<?php
session_start();
$inc=include('../vistas/conexion.php');

if($inc) {
    // ***Obtenemos el correo del usuario que inició sesión***
    $correo_usuario = $_SESSION['usuarioingresando']; // ***Agregado***: Correo del usuario autenticado

    // ***Filtrar los reportes según el correo del usuario autenticado***
    $consulta = "SELECT * FROM reportes WHERE correo_usuario = '$correo_usuario'";
    $resultado= mysqli_query($conn, $consulta);

    if($resultado) {
        while($row = $resultado->fetch_array()) {
            $nombre = $row['nombre'];
            $telefono = $row['telefono'];
            $toma = $row['numero_toma'];
            $direccion = $row['direccion'];
            $problema = $row['tipo_problema'];
            $descripcion = $row['descripcion'];
            $estado = $row['estado'];
            
        }
    }
    if(isset($_SESSION['usuarioingresando']))
{
$usuarioingresado = $_SESSION['usuarioingresando'];
$buscandousu = mysqli_query($conn,"SELECT * FROM usuarios WHERE correo = '".$usuarioingresado."'");
$mostrar=mysqli_fetch_array($buscandousu);
	
}else
{
	header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes Generados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #e0f7fa;
        }
        .contenedor {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px; 
            box-sizing: border-box;
            background-color: #e0f7fa;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        p {
            margin: 0;
        }
        b {
            display: inline-block;
            width: 100px; 
            font-weight: bold;
        }
        input[type="text"] {
            width: calc(100% - 120px); 
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <link rel="stylesheet" href="../Css/style.css">
    <div class="BarraLateral">
    <ul>
    <div class="NomUsuario"><?php echo $mostrar['nom']?></div>
    <hr>
    <li><a href="cliente.php" >Inicio</a></li>
    <li><a href="../cliente/crear_reporte.php" >Realizar Reporte</a></li>
    <li><a href="seguimiento_reporte.php" >Seguimiento del reporte</a></li>

    <li><a href="../vistas/cerrar_sesion.php" >Cerrar sesión</a></li>
    </ul>
    </div>
    <div class="contenedor">
        <h2><?php echo "Reportes Generados  "; ?></h2>
        <div>
            <p>
                <b>Nombre:</b> <input type="text" name="" id="" value="<?php echo $nombre; ?>"><br>
                <b>Telefono:</b> <input type="text" name="" id="" value="<?php echo $telefono; ?>"><br>
                <b>Toma:</b> <input type="text" name="" id="" value="<?php echo $toma; ?>"><br>
                <b>Dirección:</b> <input type="text" name="" id="" value="<?php echo $direccion; ?>"><br>
                <b>Problema:</b> <input type="text" name="" id="" value="<?php echo $problema; ?>"><br>
                <b>Descripción:</b> <input type="text" name="" id="" value="<?php echo $descripcion; ?>"><br>
                <b>Estado:</b> <input type="text" name="" id="" value="<?php echo $estado; ?>"><br>
            
            </p>
        </div>
    </div>
</body>
</html>





<?php
        } 
    
?>