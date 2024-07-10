<?php
  // Verificar si existe un mensaje de error
  if (isset($_SESSION['error'])) {
      echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
      // Eliminar el mensaje de error para que no se muestre más de una vez
      unset($_SESSION['error']);
  }
?>
<div class="row">
    <div class="card-CResponsive full-Cimage pt-C30" style="background-image: url('image/fondo.jpg');">
      	<div class="row d-flex align-items-center">
        	<div class="col-10 offset-1 align-items-center">
            	<div class="row d-flex justify-content-center text-white font-weight-bold h0-C">
             	 	Somos Wikidom
            	</div>
            	<div class="row">
            		<div class="col-8 offset-2 font-weight-bold text-center h4">	
            			En Wikidom nos dedicamos a ofrecer productos (Tenis, gorras y cuadros) de alta calidad y personalizados para los amantes de los superhéroes, videojuegos y personajes animados. 
            		</div>
            	</div>              
        	</div>
      	</div>
    </div>
</div>
<div class="row mt-5 mb-5">
	<div class="col-10 offset-1">
		<div class="card shadow p-5">
			<div class="row d-flex justify-content-center h1 font-weight-bold line-">
              Visión:</br></br>
            </div>
	      	<div class="row d-flex align-items-center justify-content-center">	          	
	        	<div class="col-8">
	        		<div class="row d-flex justify-content-center">
	        			<div class="col-10">
			        		<div class="row justify-content-center pt-3">
			        			<img src="image/main_logo.png" class="w-25">
			        		</div>
			        		<div class="row text-gray-dark text-center h4 font-weight-bold d-flex justify-content-center">
			        			Wikidom se proyecta para el año 2028 como una de las mejores empresas de calzado y gorras personalizadas con servicio, calidad.
			        		</div>
	        			</div>
	        		</div>
	          	</div>				          	
	        	<div class="col-4">
	            	<img src="image/about_bulma.jpeg" class="w-100 m-1 m-md-4">
	          	</div>			
	        </div>
	    </div>
	</div>	
</div>
<div class="row">
    <div class="w-100 full-Cimage js-banner d-flex align-items-center opacity-image-div">
      	<div class="col-xl-10 offset-1">
            <div class="row d-flex justify-content-center h1 font-weight-bold line-">
              Misión:</br></br>
            </div>
            <div class="row d-flex justify-content-center h8 text-gray-dark mt-3 mb-5">
            	<div class="col-xl-9 text-center h4">
            		Nuestra misión es brindar una experiencia de compra única y satisfactoria, que les permita a nuestros clientes expresarse a través de su estilo de una manera única y auténtica.
            		</br></br>
            		Nos esforzamos por ofrecer una amplia variedad de diseños exclusivos y opciones de personalización para satisfacer las necesidades y preferencias individuales de nuestros clientes. 
            	</div>
            </div>            
      	</div>
    </div>
</div>