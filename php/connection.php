<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wikidom";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}
?>
<?php






