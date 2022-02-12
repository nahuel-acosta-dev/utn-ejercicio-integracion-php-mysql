<?php
$nombreForm = $_POST['nombre'];
$apellidoForm = $_POST['apellido'];
$edadForm = $_POST['edad'];
$emailForm = $_POST['email'];
$consultaForm = $_POST['consulta'];
$mensajeForm = $_POST['mensaje'];

include("conexion.php");

mysqli_query($base, "INSERT INTO consultas VALUES(DEFAULT, 
'$nombreForm','$apellidoForm','$edadForm', '$emailForm', 
'$consultaForm', '$mensajeForm')");

header("Location: index.php?enviado-con-exito");