<?php
// Establecer la conexión con la base de datos
$servername = "Local instance MySQL80";
$username = "root";
$password = "";
$dbname = "denuncias2";
$conn = new mysqli($servername, $username, $password, $dbname);

// Recuperar los datos del formulario
$nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);
$email = mysqli_real_escape_string($conexion, $_POST["email"]);
$tipoDenuncia = mysqli_real_escape_string($conexion, $_POST["tipoDenuncia"]);
$dateSuceso = mysqli_real_escape_string($conexion, $_POST["dateSuceso"]);
$dateDenuncia = mysqli_real_escape_string($conexion, $_POST["dateDenuncia"]);
$descripcionDenuncia = mysqli_real_escape_string($conexion, $_POST["descripcionDenuncia"]);
$evidenciaFotografica = mysqli_real_escape_string($conexion, $_POST["evidenciaFotografica"]);

// Validar los datos del formulario (por ejemplo, verificar que el correo electrónico es válido)
// ...

// Insertar los datos en la base de datos utilizando una consulta SQL INSERT
$query = "INSERT INTO denuncias (nombre, email, tipoDenuncia, dateSuceso, dateDenuncia, descripcionDenuncia, evidenciaFotografica) VALUES ('$nombre', '$email', '$tipoDenuncia', '$dateSuceso', '$dateDenuncia', '$descripcionDenuncia', '$evidenciaFotografica')";
mysqli_query($conexion, $query);

// Cerrar la conexión con la base de datos
mysqli_close($conexion);

// Redirigir al usuario a una página de confirmación o de error
// ...
?>
