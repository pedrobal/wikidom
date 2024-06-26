<?php
// Incluir el archivo de conexión a la base de datos
include('connection.php');

// Obtener el ID del producto deseado (puedes obtenerlo desde la URL o cualquier otra fuente)
if (isset($_GET['id'])) {
    $id_producto = $_GET['id'];

    // Consulta SQL para obtener un producto por su ID
    $sql = "SELECT * FROM products WHERE id = $id_producto";
    
    $result = $conn->query($sql);

    // Verificar si se encontraron resultados
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Aquí puedes acceder a los datos del producto por su ID
        $name =  $row['name'];
        $type =  $row['type'];
        $description = $row['description'];
        $value = $row['value'];
        $image ='<img src="'. $row['image'] .'" class="img-fluid">';
        $texto_adicional = "¡Hola! Estoy interesado en comprar este producto. ". $name;
        $enlace_whatsapp = "https://api.whatsapp.com/send?phone=573182568066&text=" . $texto_adicional;
    } else {
        echo "No se encontró el producto con el ID $id_producto.";
    }
} else {
    echo "ID de producto no proporcionado.";
}

// Cerrar la conexión
$conn->close();
?>
