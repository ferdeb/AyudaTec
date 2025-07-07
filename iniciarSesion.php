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
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    // Crear la consulta SQL para buscar el usuario en la tabla
    $sql = "SELECT * FROM nombre_de_la_tabla WHERE email = '$email' AND contrasena = '$contrasena'";

    // Ejecutar la consulta SQL
    $result = $conn->query($sql);

    // Verificar si se encontró un registro coincidente
    if ($result->num_rows == 1) {
        echo "Inicio de sesión exitoso.";
    } else {
        echo "Credenciales incorrectas.";
    }
}

// Cerrar la conexión con la base de datos
$conn->close();
?>
