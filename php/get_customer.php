<?php
// Incluir el archivo de conexión a la base de datos
include('connection.php');
// Consulta SQL para obtener todos los registros de la tabla "customer"
$sql = "SELECT * FROM customer";

// Ejecutar la consulta
$result = $conn->query($sql);
$tabla_customer = "";
// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tabla_customer .= "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["first_name"] . "</td>
                                <td>" . $row["last_name"] . "</td>
                                <td>" . $row["email"] . "</td>
                                <td>" . $row["phone"] . "</td>
                                <td>
                                    <a href='php/delete_customer.php?id=" . $row["id"] ."'>Eliminar</a>
                                </td>
                            </tr>";
    }
} else {
    echo "No se encontraron registros en la tabla 'customer'.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
