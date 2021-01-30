<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>WebLearnig_Registro de usuarios</title>
	<link rel="shortcut icon" href="imagenes/learning.png">
	<link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="main.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="imagenes/fondo4.jpg">
<center> <header>
<br>
<h1>Web Learning</h1>
<img src="imagenes/learning.png" alt="" srcset="" width="50px">
</header>
</center>
	<div class="header">
		<h2>Registro</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>
		<div class="input-group">
		<input type="text"  name="username" placeholder="&#128100;
        	Nombres"  required value="<?php echo $username maxlength="16" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
	<!--		
		<input type="text" name="username" placeholder="&#128100;
            Nombres" required autofocus value="<?php echo $username; ?>">-->
		</div>
		<div class="input-group">
		<input type="text"  name="apellidos" placeholder="&#128100;
		Apellidos" maxlength="16" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
		<div class="input-group">
		<input type="text"  name="apellidos" placeholder="&#128100;
		Grado de estudios" maxlength="16" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
		</div>
			
			<input type="email" name="email" placeholder="&#9993;
            Correo electronico" required value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
		<input type="text"  name="pass" placeholder="&#128100;
		Contraseña" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
			
	<!--<input type="password" placeholder="&#8962;
              Contraseña" required name="password_1" >
		</div> -->
		<div class="input-group">
		<input type="text"  name="pass" placeholder="&#128100;
		Repite  tu Contraseña" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
	<!---
			<input type="password" placeholder="&#8962;
              Confirmar Contraseña" required name="password_2"> -->
		</div>
		<center>
		<div class="input-group">
			<button type="submit" class="btn_submit" name="reg_user">Registrarse</button>
		</div>
		<p>
			Ya tienes cuenta WebLearnig? <a href="login.php">Inicia sesión</a>
		</p></center>
	</form>
</body>
</html>