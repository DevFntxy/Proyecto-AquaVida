<?php

$conex=mysqli_connect("localhost","root","","aqua");



if(!$conex) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>