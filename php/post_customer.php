<?php
// Incluir el archivo de conexión a la base de datos
include('connection.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Consulta SQL para insertar los datos en la tabla "customer"
    $sql = "INSERT INTO customer (first_name, last_name, email, phone) VALUES ('$first_name', '$last_name', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message']= "Los datos del cliente se han ingresado correctamente.";
        header("Location: ".$_SERVER['HTTP_REFERER']);
    } else {
         $_SESSION['message']= "Error: " . $sql . "<br>" . $conn->error;
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>