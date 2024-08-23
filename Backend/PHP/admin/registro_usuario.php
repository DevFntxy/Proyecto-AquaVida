
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <style>


h2 {
    font-size: 2em;
    color: #00796b;
    text-align: center;
    margin-bottom: 20px;
}

form {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    max-width: 400px;
    width: 100%;
}

label {
    font-size: 1.1em;
    color: #004d40;
    display: block;
    margin-bottom: 8px;
}

input[type="text"],
input[type="password"],
input[type="email"] {
    width: calc(100% - 24px);
    padding: 10px;
    margin-bottom: 20px;
    border: 2px solid #b0bec5;
    border-radius: 8px;
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
    font-size: 1em;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus {
    border-color: #00796b;
    box-shadow: 0 0 8px rgba(0, 121, 107, 0.5);
    outline: none;
}

input[type="text"]:hover,
input[type="password"]:hover,
input[type="email"]:hover {
    border-color: #004d40;
}

input[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #00796b;
    color: #ffffff;
    border: none;
    border-radius: 8px;
    font-size: 1.2em;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #004d40;
}

#mensaje_toma {
    font-size: 0.9em;
    color: red;
    margin-bottom: 20px;
}

    </style>

<form action="" method="post">
<?php

include("../conexion.php"); // Conexión a la base de datos

if(isset($_POST['register'])) {  // Verifica si se ha enviado el formulario

    // Verifica que los campos requeridos no estén vacíos
    if(strlen($_POST['nombre']) >= 1  && strlen($_POST['contraseña']) >= 1 && strlen($_POST['correo']) >= 1 ) {



        // Recoge y limpia los datos del formulario
        $nombre = trim($_POST['nombre']);
       $contraseña = trim($_POST['contraseña']);
        $email = trim($_POST['correo']);
        $fecha = date('Y-m-d');
       

        // Consulta SQL para insertar los datos en la base de datos
        $consulta = "INSERT INTO usuarios(nom,correo, pass ,fecha_reg) VALUES ('$nombre', '$email','$contraseña', '$fecha')";





        
        // Ejecuta la consulta
        $resultado = mysqli_query($conn, $consulta);
        
        // Verifica si la consulta fue exitosa
        if ($resultado) {
            echo '<h3 class="ok">¡Te ha guardado tu formulario!</h3>';
        } else {
            echo '<h3 class="bad">¡Ups ha ocurrido un error!</h3>';
        }
    } else {
        echo '<h3 class="bad">¡Por favor complete los campos!</h3>';
    }
}
?>
</form>
    
</body>
</html>

