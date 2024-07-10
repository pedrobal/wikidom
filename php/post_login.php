<?php
include('connection.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT id, name FROM usuarios WHERE name = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Inicio de sesión exitoso
        $row = $result->fetch_assoc();
        $_SESSION["id"] = $row["id"];
        $_SESSION["name"] = $row["name"];
        header("Location: ../index.php?page=pagina5"); // Redirige al usuario a la página de bienvenida
        exit;
    } else {
        $_SESSION['error'] = "Inicio de sesión fallido. Por favor, verifique sus credenciales.";
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>
