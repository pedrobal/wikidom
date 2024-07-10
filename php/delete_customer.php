<?php
// Incluir el archivo de conexión a la base de datos
include('connection.php');
session_start();

if (isset($_GET['id'])) {
    $id_cliente = $_GET['id'];

    // Consulta SQL para eliminar el cliente por su ID
    $sql = "DELETE FROM customer WHERE id = $id_cliente";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "El cliente ha sido eliminado correctamente.";
    } else {
        $_SESSION['message'] = "Error al eliminar el cliente: " . $conn->error;
    }

    // Redirigir de regreso a la página de listado de clientes
    header("Location: ".$_SERVER['HTTP_REFERER']);
    exit;
}
?>
