<?php

session_start();
include('../vistas/conexion.php');


// Verifica si la sesión está activa
if(isset($_SESSION['usuarioingresando'])) {
    $usuarioingresado = $_SESSION['usuarioingresando'];
    $buscandousu = mysqli_query($conn, "SELECT * FROM reportes WHERE correo_usuario = '$usuarioingresado'");
    $mostrar = mysqli_fetch_array($buscandousu);
} else {
    header('location: actualizar_reporte.php');
    exit(); // Añadido para detener la ejecución del script
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Reportes</title>
    <link rel="stylesheet" href="../Css/style.css">

</head>
<body style="background-color: #e0f7fa;">
<div class="BarraLateral">
<ul>
<div class="NomUsuario"></div>
<hr>
<li><a href="principal.php" >Inicio</a></li>
<li><a href="../admin/reportes_recibidos.php">Reportes Recibidos</a></li>
<li><a href="../admin/registro.php">Registrar Usuario</a></li>
<li><a href="usuarios_tabla.php">Mostrar Usuario</a></li>
<li><a href="actualizar_reporte.php">Actualizar Reporte</a></li>
   

<li><a href="../vistas/cerrar_sesion.php" >Cerrar sesión</a></li>
</ul>
</div>
    <main class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <?php if(isset($_SESSION['message'])) { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php session_unset(); } ?>
                <div class="col-md-8 mx-auto">
                    <table class="table table-striped table-hover table-bordered text-center custom-table">
                        <thead class="thead-dark">
                            <tr>
                                <th colspan="8"><h2 id="mensaje" class="my-3">Listado de Reportes</h2></th>
                            </tr>
                            <tr>
                                <th>Nombre Completo</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Toma</th>
                                <th>Tipo de Problema</th>
                                <th>Descripción</th>
                                <th>Estado del Reporte</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Ejecuta la consulta utilizando mysqli
                            $query = "SELECT * FROM reportes";
                            $result = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                                    <td><?php echo htmlspecialchars($row['direccion']); ?></td>
                                    <td><?php echo htmlspecialchars($row['telefono']); ?></td>
                                    <td><?php echo htmlspecialchars($row['numero_toma']); ?></td>
                                    <td><?php echo htmlspecialchars($row['tipo_problema']); ?></td>
                                    <td><?php echo htmlspecialchars($row['descripcion']); ?></td>
                                    <td><?php echo htmlspecialchars($row['estado']); ?></td>
                                    <td>
                                        <a href="reporte_modificar.php?id_registro=<?php echo $row['id_registro']; ?>" class="btn btn-primary btn-sm">Editar</a>
                                        <a href="reportes_eliminar.php?id_registro=<?php echo $row['id_registro']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
