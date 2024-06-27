<?php
// Incluir el archivo de conexión a la base de datos
include('connection.php');
// Consulta SQL para obtener todos los productos
$sql = "SELECT * FROM products WHERE id <= 8";
$result = $conn->query($sql);

// Inicializar una variable para almacenar la tabla de productos
$tabla_productos = "";
$tabla_productos2 = "";

// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    // Crear una tabla HTML con los productos
    while ($row = $result->fetch_assoc()) {
        if ($row["id"] <= 4) {
            $tabla_productos .=' 
                            <a class="col-8 col-sm-6 offset-sm-0 col-lg-3 mb-2" href="index.php?page=pagina4&id='. $row["id"] .'">
                                <div class="card-CResponsive pt-C150">
                                    <div class="card shadow-sm w-100 h-100 rounded-C4 overflow-hidden">
                                        <div class="row h-80 m-0 full-Cimage" style="background-image: url('. $row["image"] .');">
                                        </div>
                                        <div class="row h-20 m-0 d-flex align-content-center">
                                            <div class="col-12">
                                                <div class="row m-0 h7-C">
                                                    <span class="small text-black-50 text-truncate">'. $row["type"] .'</span>
                                                </div>
                                                <div class="row m-0 h5">
                                                    <span class="small text-Csecondary font-weight-bold text-truncate">'. $row["name"] .'</span>
                                                </div>
                                                <div class="row m-0 h5">
                                                    <span class="font-weight-bold small">COP $'. $row["value"] .'</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>';
        }
        else if($row["id"]>4 and $row["id"] <= 8){
            $tabla_productos2 .=' 
                            <a class="col-8 col-sm-6 offset-sm-0 col-lg-3 mb-2" href="index.php?page=pagina4&id='. $row["id"] .'">
                                <div class="card-CResponsive pt-C150">
                                    <div class="card shadow-sm w-100 h-100 rounded-C4 overflow-hidden">
                                        <div class="row h-80 m-0 full-Cimage" style="background-image: url('. $row["image"] .');">
                                        </div>
                                        <div class="row h-20 m-0 d-flex align-content-center">
                                            <div class="col-12">
                                                <div class="row m-0 h7-C">
                                                    <span class="small text-black-50 text-truncate">'. $row["type"] .'</span>
                                                </div>
                                                <div class="row m-0 h5">
                                                    <span class="small text-Csecondary font-weight-bold text-truncate">'. $row["name"] .'</span>
                                                </div>
                                                <div class="row m-0 h5">
                                                    <span class="font-weight-bold small">COP $'. $row["value"] .'</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>';
        }
    }
} 

// Cerrar la conexión
$conn->close();
?>
