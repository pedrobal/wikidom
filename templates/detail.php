<?php
  include('php/get_detail_product.php');
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
    <div class="col bg-white">
      <div class="row pb-3 pt-3">
        <div class="col-3 offset-1">
            <?php
            if (isset($image)) {
                echo $image;
            } else {
                echo "No hay imagenes.";
            }
            ?>
        </div>
        <div class="col-5 offset-2">
          <div class="row">
            <div class="col-12 col-md-8 text-start">
              <span class="text-black font-regular-medium h4">
                <?php
                if (isset($name)) {
                    echo $name;
                } else {
                    echo "Sin titulo";
                }
                ?>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-12 h8 text-start pt-3">
              <span class="text-Cprimary font-regular-medium">Categoria:</span>
              <span class="text-black font-regular-medium ml-1 cpointer js-redirect">
                <?php
                if (isset($type)) {
                    echo $type;
                } else {
                    echo "Sin categoria";
                }
                ?>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-12 h8 text-start pt-3">
              <span class="text-Cprimary font-regular-medium">Descripción:</span>
              <span class="text-black font-regular-medium ml-1 cpointer js-redirect">
                <?php
                if (isset($description)) {
                    echo $description;
                } else {
                    echo "Sin descripción";
                }
                ?>
              </span>
            </div>
          </div>
          <div class="row">  
            <div class="col-12 h5 text-start pt-4 pb-3">
              <span class="text-Cprimary font-regular-medium">
                <?php
                if (isset($value)) {
                    echo "COP ".$value;
                } else {
                    echo "Sin precio";
                }
                ?>
              </span>
            </div>
          </div>
          <div class="row">  
            <div class="col-12 h8 text-start pb-1">
              <i class="fa fa-check-square text-Csecondary mr-2"></i><span class="text-Cprimary">Garantia:</span>
              <u>30 días</u>
            </div>
          </div>
          <div class="row">  
            <div class="col-12 h8 text-start pb-1">
              <i class="fa fa-truck text-Csecondary mr-2"></i><span class="text-Cprimary">Envío </span>
              <i id="value_total_quote" class="text-Cprimary">Gratis</i>
            </div>
          </div>
          <div class="row">  
            <div class="col-12 h6 text-start pb-1">
              <span class="text-Cprimary font-regular-medium">Paga seguro con:</span>
            </div>
          </div>
          <div class="row">  
            <div class="col-12 h6 text-start pb-1">
              <img src="image/visa.png" class="img-fluid">
              <img src="image/american.png" class="img-fluid">
              <img src="image/master-card.png" class="img-fluid">
              <img src="image/pse.png" class="img-fluid">
            </div>
          </div>
          <div class="row">  
            <div class="col-4 pt-3">
              <a type="submit" class="btn btn-sm br-C10 bg-Cprimary text-white btn-block" target="_blank" href="<?php echo $enlace_whatsapp; ?>">Comprar</a>
            </div>
          </div>   
        </div> 
      </div>
    </div>
</div>