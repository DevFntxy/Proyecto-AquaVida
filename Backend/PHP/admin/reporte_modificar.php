<?php
session_start();

include('../vistas/conexion.php');

$estado = '';

// Comprobamos si 'id_registro' está presente en la URL
if (isset($_GET['id_registro'])) {
    $id = $_GET['id_registro'];

    if (is_numeric($id)) {
        $query = "SELECT estado FROM reportes WHERE id_registro=$id";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Error en la consulta: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $estado_reporte = $row['estado'];
        } else {
            die("No se encontró el reporte con el ID proporcionado.");
        }
    } else {
        die("ID no válido.");
    }
} else {
    die("No se proporcionó un ID de reporte.");
}

if (isset($_POST['update'])) {
    $id = $_GET['id_registro'];
    $estado = $_POST['estado'];

    if (is_numeric($id) && !empty($estado)) {
        $query = "UPDATE reportes SET estado = '$estado' WHERE id_registro=$id";
        if (mysqli_query($conn, $query)) {
            $_SESSION['message'] = 'Estado del reporte actualizado correctamente';
            $_SESSION['message_type'] = 'warning';
            header('Location: ../admin/actualizar_reporte.php');
            exit();
        } else {
            die("Error al actualizar: " . mysqli_error($conn));
        }
    } else {
        die("Datos inválidos.");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR REPORTE </title>
    
</head>
<body>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR REPORTE </title>
    <style>
      
   
      .container {
    width: 60%; 
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    justify-content: center; 
    align-items: center; 
    min-height: 100vh; 
    background-color: #f4f4f4;
    padding: 2rem;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px; 
}

.card {
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #ffffff;
    padding: 20px;
}
.card h4 {
    color: #333;
    font-weight: 600;
    text-align: center;
    margin-bottom: 20px;
}

/* Estilos del formulario */
.form-group label {
    color: #555;
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 5px;
    width: 100%;
}

.form-group select {
    width: 100%;
    padding: 8px 12px;
    font-size: 14px;
    color: #333;
    border: 1px solid #ddd;
    border-radius: 4px;
    transition: border-color 0.3s ease;
}

.form-group select:focus {
    border-color: #66afe9;
    outline: none;
}

/* Botón de actualización */
.btn-success {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    border: none;
    border-radius: 4px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 15px;
}

.btn-success:hover {
    background-color: #218838;
}




.card2 {
    background-color: #ffffff; 
    border-radius: 12px; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    padding: 20px; 
    margin: 20px 0; 
    max-width: 500px; 
    margin-left: auto; 
    margin-right: auto;
    border: 1px solid #e0e0e0;
    height:200px;
    width: 400px;
}

.card2 h4 {
    font-size: 1.5rem; 
    font-weight: bold; 
    color: #333; 
    text-align: center; 
    margin-bottom: 20px;
}


.card2 .form-group {
    margin-bottom: 15px; 
}

.card2 label {
    font-weight: 500; 
    color: #555; 
}

.card2 .form-control {
    padding: 10px; 
    border-radius: 8px; 
    border: 1px solid #ccc; 
    font-size: 1rem; 
    background-color: #f9f9f9; 
}


.card2 .btn {
    font-size: 1.1rem; 
    padding: 10px 15px; 
    border-radius: 8px; 
    width: 100%; 
    background-color: #28a745; 
    color: white; 
    transition: background-color 0.3s ease; 
}

.card2 .btn:hover {
    background-color: #218838; 
}
    </style>
</head>
<body>
<div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card2">
                    <h4>Editar Estado del Reporte</h4>
                    <!-- Corrección en la sintaxis de la etiqueta <form> -->
                    <form action="reporte_modificar.php?id_registro=<?php echo $_GET['id_registro']; ?>" method="POST">
                        <div class="form-group">
                            <label for="estado_reporte">Estado del Reporte</label>
                            <select name="estado" class="form-control">
                                <option value="pendiente" <?php echo $estado_reporte == 'pendiente' ? 'selected' : ''; ?>>Pendiente</option>
                                <option value="en_proceso" <?php echo $estado_reporte == 'en_proceso' ? 'selected' : ''; ?>>En Proceso</option>
                                <option value="completado" <?php echo $estado_reporte == 'completado' ? 'selected' : ''; ?>>Completado</option>
                            </select>
                        </div>
                        <button class="btn btn-success" name="update">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>