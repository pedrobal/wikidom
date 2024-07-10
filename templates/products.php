<?php
  include('php/get_produtcs_all.php');
?>
<?php
  // Verificar si existe un mensaje de error
  if (isset($_SESSION['error'])) {
      echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
      // Eliminar el mensaje de error para que no se muestre más de una vez
      unset($_SESSION['error']);
  }
?>
<div class="row mt-5">
  <div class="col-10 offset-1 px-0">
    <div class="row align-items-center">
      <?php
      if (isset($tabla_productos)) {
          echo $tabla_productos;
      } else {
          echo "No se encontraron productos.";
      }
      ?>
    </div>
  </div>
</div>