<?php include 'partials/head.php';?>
<?php include 'partials/menu.php';?>

<div class="container">

	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<form action="registroCode.php" method="POST" role="form">
							<legend>Registro como Alumno</legend>
							<div class="form-group">
							<!--	<label for="nombre">Nombre</label>-->
								<input type="text" name="txtNombre" class="form-control" id="nombre" autofocus required placeholder="Nombre completo">
							</div>
							
							<div class="form-group">
								<!--<label for="nombre">Grado de Estudios</label>-->
								<input type="text" name="txtNombre" class="form-control" id="nombre" autofocus required placeholder="Grado de estudios">
							</div>

							<div class="form-group">
								<!--<label for="usuario">Usuario</label>-->
								<input type="text" name="txtUsuario" class="form-control" id="usuario" autofocus required placeholder="Nombre de usuario">
							</div>

							<div class="form-group">
								<!--<label for="email">E-mail</label>-->
								<input type="email" name="txtEmail" class="form-control" id="email"  required placeholder="Dirección de e-mail">
							</div>


							<div class="form-group">
								<!--<label for="password">Password</label>-->
								<input type="password" name="txtPassword" class="form-control" required id="password" placeholder="Password">
								<input type="password" name="confirmarpass" class="form-control" required id="confirmarpass" placeholder="Repita su contraseña">
							</div>

						
				
                            <input type="checkbox" id="" name="cuadro1" value="Terminos y condiciones" required>
							<label for="vehicle1"><a href="#">Aceptar Terminos y condiciones</a> </label><br>

							<input type="checkbox" id="" name="cuadro2" value="correos">
							<label for="vehicle1"><a href="#">Aceptar recibir emails</a> </label>
							<br>
							<center>  <button type="button" class="btn btn-success" onclick="validarpass();">Paso 1: Verificar</button> </center>
							<br>
					<center>	<div class="g-recaptcha" data-sitekey="6LdaDgAVAAAAAAJ9gCrItsg6bbgZrkQs_DGJeln5"></div></center>	
      <br/>
	  <center>  <button type="submit" class="btn btn-success">Paso 2: ¡Registrarme!</button> </center>	
							<br>
                           						
							<br>

												</form>

					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- /.container -->

<?php include 'partials/footer.php';?>