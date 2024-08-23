<?php
    include('../conexion.php');

    if (isset($_GET['id_registro'])) {
        $id = $_GET['id_registro'];
        $query = "DELETE FROM reportes WHERE id_registro = $id"; //eliminar lo que esté almacenado en el id que me da la variable
        $result = mysqli_query($conn, $query);

        if (!$result) {

            die("Fail"); //si no existe resultado mostrar mensaje fail
        }
            // si si existe mostar un mensaje y volver a la pàgina principal

        $_SESSION['message'] = 'Los datos se eliminaron satisfactoriamente.';
        $_SESSION['message_type'] = 'danger'; //color del mensaje
        header('Location: actualizar_reporte.php');  
    }

?>

