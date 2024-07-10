<?php
  // Verificar si existe un mensaje de error
  include('php/get_customer.php');
  if (isset($_SESSION['error'])) {
      echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
      // Eliminar el mensaje de error para que no se muestre más de una vez
      unset($_SESSION['error']);
  }
  if (isset($_SESSION['id'])) {
      echo '<div class="row mt-3">
              <div class="col-3 offset-1">
                <a class="btn bg-Cprimary text-white font-weight-bold w-100 fa fa-sign-out" href="php/close_sesion.php" role="button">  Cerrar sesión</a>
              </div>
            </div>';
  }
  else {
    include('php/close_sesion.php');
  }
?>
<div class="row mt-3">
  <div class="col-10 offset-1">
    <div class="table-responsive">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Email</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if (isset($tabla_customer)) {
                echo $tabla_customer;
            } else {
                echo "No se encontraron productos.";
            }
          ?>
        </tbody>
      </table>  
    </div>
  </div>
</div>
