<?php
  // Verificar si existe un mensaje de error
  if (isset($_SESSION['error'])) {
      echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
      // Eliminar el mensaje de error para que no se muestre más de una vez
      unset($_SESSION['error']);
  }
?>
<div class="row my-5">
	<div class="col-10 offset-1">
		<div class="row justify-content-center">
			<div class="col-10 offset-1">
			    <form class="card shadow justify-content-center align-items-center w-100" method="post" action="php/post_customer.php">
			      	<div class="card-body w-100">
			        	<div class="card-title text-center text-Csecondary font-weight-bold h5">Datos personales</div>
			        	<div class="row mt-3">
			        		<div class="input-group">
							  	<input type="text"  placeholder="Nombres" name="first_name" aria-label="Nombre" class="form-control col-5 offset-1" required>
							  	<input type="text"  placeholder="Apellidos" name="last_name" aria-label="Apellido" class="form-control col-5" required>
							</div>
			        	</div>
			        	<div class="row mt-3">
			        		<div class="input-group">
							  	<input type="email"  placeholder="Correo electrónico" name="email" aria-label="Correo electrónico" class="form-control col-5 offset-1" required>
							  	<input type="text"  placeholder="Teléfono" name="phone" aria-label="Teléfono" class="form-control col-5" required>
							</div>
			        	</div>
			      	</div>
			      	<div class="card-footer w-100 bg-Cprimary">
					  	<div class="col-xl-12">
			          		<button type="submit" class="btn bg-Cprimary w-100">
				          		<div class="row d-flex justify-content-center mx-0">
				            		<div class="text-white font-weight-bold h6">
				            			ENVIAR INFORMACIÓN
									</div>
									<div class="row pt-1 pl-3 mx-0">
										<i class="fa fa-chevron-right fa-1 text-white" aria-hidden="true"></i>
									</div>
				            	</div>
			            	</button>				            	
		          		</div>
					</div>
			   	</form>
			</div>
		</div>
		<div class="row">
			<div class="col-10 offset-1">
				<?php
				  // Verificar si existe un mensaje de error
				  if (isset($_SESSION['message'])) {
				      echo '<p style="color: red;">' . $_SESSION['message'] . '</p>';
				  }
				?>
			</div>
		</div>
	</div>

</div>