<?php
  include('php/get_produtcs.php');
?>
<?php
  // Verificar si existe un mensaje de error
  // session_start();
  if (isset($_SESSION['error'])) {
      echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
      // Eliminar el mensaje de error para que no se muestre más de una vez
      unset($_SESSION['error']);
  }
?>
<div class="row">
	<div id="carouselIndicators" class="carousel slide w-100" data-ride="carousel">
        <ol class="carousel-indicators mb-md-5">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            	<img src="image/banner.png" class="img-Cfluid">
            </div>
            <div class="carousel-item">
            	<img src="image/gorras_banner.png" class="img-Cfluid">
            </div>
            <div class="carousel-item">
            	<img src="image/tenis_banner.png" class="img-Cfluid">
            </div>		               
        </div>
        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
            <span class="fa fa-arrow-left fa-lg mr-auto ml-5" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
            <span class="fa fa-arrow-right fa-lg ml-auto mr-5" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="row">
	<div class="col-10 offset-1">
      	<div class="row mt-5 mb-3">
        	<div class="col-6">
          		<div class="row font-weight-bold h2 mx-0">
            		Productos mas Top
          		</div>
        	</div>
        	<div class="col-6">
         		<div class="row h-100 align-items-end justify-content-end">
         			<span class="p-2 mx-1 rounded-circle">
         				<i class="fa fa-arrow-left fa-lg text-Cprimary pointer-C" data-target="#multi-item-carousel" data-slide="prev"></i>	
         			</span>
         			<span class="p-2 mx-1 rounded-circle">
         				<i class="fa fa-arrow-right fa-lg text-Cprimary pointer-C" data-target="#multi-item-carousel" data-slide="next"></i>
         			</span>
          		</div>
        	</div>
      	</div>
    </div>
</div>  

<div class="row">        
	<div class="col-10 offset-1 px-1">
      	<!--Carousel Wrapper-->
      	<div id="multi-item-carousel" class="carousel slide carousel-multi-item" data-ride="carousel">
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                  	<div class="row align-items-center justify-content-center m-0">
	                  	<!-- Mostrar la tabla de productos generada por el archivo PHP -->
	                  	<?php
	                  	if (isset($tabla_productos)) {
	                  	    echo $tabla_productos;
	                  	} else {
	                  	    echo "No se encontraron productos.";
	                  	}
	                  	?>
                  	</div>
                </div>
                <!--/.First slide-->

                <!--Second slide-->
               	<div class="carousel-item">
                  	<div class="row align-items-center justify-content-center m-0">
	                  	<?php
	                  	if (isset($tabla_productos2)) {
	                  	    echo $tabla_productos2;
	                  	} else {
	                  	    echo "No se encontraron productos.";
	                  	}
	                  	?>
                  	</div>
                </div>
                <!--/.Second slide-->
  			</div>
  			<!--/.Slides-->
		</div>
		<!--/.Carousel Wrapper-->
		</div>
	</div>
<div class="row mb-5"> 
	<div class="col-10 offset-1">
		<div class="row my-lg-4">
			<div class="col-8 offset-2 col-md-2 offset-md-5">
        <a class="btn bg-Cprimary text-white font-weight-bold w-100" href="index.php?page=pagina1" role="button">Ver todos</a>
			</div> 						
		</div>
	</div>
</div>
<div class="row mt-5 mb-5">
	<div class="col-10 offset-1">
		<div class="card shadow">
	      	<div class="row m-0 p-4">
	        	<div class="col-10 offset-1 col-md-4 offset-md-0 px-0">
	            	<img src="image/main_logo.png" class="img-fluid">
	          	</div>				          	
	        	<div class="col-12 col-md-8 align-self-center">
	        		<div class="row text-gray-dark text-center h3 font-weight-bold d-flex justify-content-center">
	        			Gorras y tenis personalizados <br> con tu personaje favorito<br> anime, superhéroes, películas y series. <br><br> 
	        			Siguenos en todas nuestras redes:
	        		</div>
	        		<div class="row justify-content-center pt-3">
	        		    <a class="nav-link px-2 py-0 h4 m-0" target="_blank" href="https://www.instagram.com/wikidom_bogota/"><span class="fa fa-instagram text-danger"></span></a>
	        		    <a class="nav-link px-2 py-0 h4 m-0" target="_blank" href="https://www.facebook.com/wikidombogota1"><span class="fa fa-facebook text-Cprimary"></span></a>
	        		    <a class="nav-link pl-2 py-0 pr-4 h4 m-0" target="_blank" href="https://api.whatsapp.com/message/MVW2ISNFN27YE1"><span class="fa fa-whatsapp text-success"></span></a>
	        		</div>
	        		<div class="row pt-3">
	        			<div class="col-4 offset-4">
                  <a class="btn bg-Csecondary text-white font-weight-bold w-100" href="index.php?page=pagina3" role="button">Formulario de contacto</a>
	        			</div> 	
	        		</div>
	          	</div>
	        </div>
	    </div>
	</div>	
</div>