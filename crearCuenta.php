<?php
// Establecer la conexión con la base de datos
$servername = "Local instance MySQL80";
$username = "root";
$password = "";
$dbname = "denuncias2";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    // Crear la consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO usuario (nombre, apellidos, email, contrasena) VALUES ('$nombre', '$apellidos', '$email', '$contrasena')";

    // Ejecutar la consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "Registro insertado correctamente en la base de datos.";
    } else {
        echo "Error al insertar el registro: " . $conn->error;
    }
}

// Cerrar la conexión con la base de datos
$conn->close();
?>
