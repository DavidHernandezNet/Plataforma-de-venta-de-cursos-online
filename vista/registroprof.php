<?php include 'partials/head.php';?>
<?php include 'partials/menu.php';?>

<div class="container">

	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-5 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-body">
						<form action="registroCode.php" method="POST" role="form">
							<legend>Registro como Profesor</legend>
							<div class="form-group">
								<label for="nombre">Nombre</label>
								<input type="text" name="txtNombre" class="form-control" id="nombre" autofocus required placeholder="Nombre Completo">
												</div>
							
							<div class="form-group">
								<label for="nombre">Actualmente usted es: </label>
								<input type="text" name="txtNombre" class="form-control" id="nombre" autofocus required placeholder="trabajor en empresa, Independiente, etc">
							</div>

							<div class="form-group">
								<label for="usuario">Usuario</label>
								<input type="text" name="txtUsuario" class="form-control" id="usuario" autofocus required placeholder="Nombre de usuario">
							</div>

							<div class="form-group">
								<label for="email">E-mail</label>
								<input type="email" name="txtEmail" class="form-control" id="email"  required placeholder="Dirección de e-mail">
							</div>


							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="txtPassword" class="form-control" required id="password" placeholder="****">
								<input type="password" name="confirmarpass" class="form-control" required id="confirmarpass" placeholder="Repita su contraseña">
							</div>

							<div class="form-group">
								<center><label for="password">Su propuesta</label></center> 
								<input type="text" name="txtUsuario" class="form-control" id="usuario" autofocus required placeholder="Categoria o curso que impartira">
								<input type="text" name="video" class="form-control" required id="password" placeholder="Sube una clase y compartenos el link">
							</div>
							<br>
							<input type="checkbox" id="" name="cuadro1" value="Terminos y condiciones" required>
							<label for="vehicle1"><a href="#">Aceptar Terminos y condiciones</a> </label><br>

							<input type="checkbox" id="" name="cuadro2" value="correos">
							<label for="vehicle1"><a href="#">Aceptar recibir emails</a> </label>
							<center>  <button type="button" class="btn btn-success" onclick="validarpass();">Paso 1: Verificar</button> </center>
							<br>
					<center>		<div class="g-recaptcha" data-sitekey="6LdaDgAVAAAAAAJ9gCrItsg6bbgZrkQs_DGJeln5"></div></center>
      <br/>
	  <center>  <button type="submit" class="btn btn-success">Paso 2: ¡Enviar Solicitud!</button> </center>	
							<br>
                           						
						
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- /.container -->

<?php include 'partials/footer.php';?>