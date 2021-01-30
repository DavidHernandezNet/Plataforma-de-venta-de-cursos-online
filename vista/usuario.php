<?php include 'partials/head.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
        header("location:admin.php");
    }
} else {
    header("location:login.php");
}
?>
<?php include 'partials/menu.php';?>
<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="jumbotron">
			<div class="container text-center">
			<h1>Perfil de Usuario</h1>
				<h1><strong>Bienvenid@</strong> <?php echo $_SESSION["usuario"]
				["nombre"]; ?></h1>
<p> 
<h3> <strong>Nombre de Usuario</strong> <?php echo $_SESSION["usuario"] ["usuario"]; ?> </h3>

<h3> <strong>Email</strong> <?php echo $_SESSION["usuario"] ["email"]; ?> </h3>


</p>


				
					<a href="cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar sesión</a>
				</p>
			</div>
		</div>
	</div>
</div><!-- /.container -->
<?php include 'partials/footer.php';?>