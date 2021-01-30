<?php include 'partials/head.php';?>
<?php include 'partials/menu.php';?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PresentJS</title>
    <link rel="shortcut icon" href="Img/learning.png">
    <link rel="stylesheet" href="Css/stylestar.css">
</head>

<body>
<div id="container">	
	
<!-- Start	Product details -->
	<div class="product-details">
		
		<!-- 	Product Name -->
	<h1>ASP</h1>
<!-- 		<span class="hint new">New</span> -->
<!-- 		<span class="hint free-shipping">Free Shipping</span> -->
<!-- 		the Product rating -->
	<span class="hint-star star">
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star-half-o" aria-hidden="true"></i>
		<i class="fa fa-star-o" aria-hidden="true"></i>
	</span>
		
	
<!-- The most important information about the product -->
		<p class="information">ASP.NET es un modelo de desarrollo Web unificado creado por Microsoft para el desarrollo de sitios y aplicaciones web dinámicas con un mínimo de código. ASP.NET forma parte de .NET Framework que contiene las librerías necesarias para la codificación. Se pueden usar distintos lenguajes de programación para realizar aplicaciones web en ASP.NET, pero nosotros 
    nos vamos a enfocar en el lenguaje C# (C Sharp) que es el más utilizado para este tipo 
    de desarrollos.</p>
<ul>
	<a class="btn btn-success">Contenido</a>
<li><a href="Asp1.php">1.-Introducción</a></li>
                <li><a href="Asp1.php">2.-Variables</a></li>
                <li><a href="Asp1.php">3.-Tipos de datos</a></li> 
                <li><a href="Asp1.php">4.-Arreglos</a></li>
                <li><a href="Asp1.php">5.-Metodos y propiedades para arreglos</a></li>
                <li><a href="Asp1.php">6.-Condicionales</a></li>
                <li><a href="Asp1.php">7.-Ciclo for</a></li>
</ul>
		
		
<!-- 		Control -->
<div class="control">
	
<!-- Start Button buying -->
	<button class="btn">
<!-- 		the Price -->
	 <span class="price">$</span>
<!-- 		shopping cart icon-->
   <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
<!-- 		Buy Now / ADD to Cart-->
   <span class="buy"> ¡Gratis! </span>
 </button>
	<!-- End Button buying -->
	
</div>
			
</div>
	
<!-- 	End	Product details   -->
	
	
	
<!-- 	Start product image & Information -->
	
<div class="product-image">
	
	<img src="Img/aspcursi.jpg" alt="Omar Dsoky">
	3
<!-- 	product Information-->
<div class="info">
	<h2>The Description</h2>
	<ul>
		<li><strong>Sun Needs: </strong>Full Sun</li>
		<li><strong>Soil Needs: </strong>Damp</li>
		<li><strong>Zones: </strong>9 - 11</li>
		<li><strong>Height: </strong>2 - 3 feet</li>
		<li><strong>Blooms in: </strong>Mid‑Summer - Mid‑Fall</li>
		<li><strong>Features: </strong>Tolerates heat</li>
	</ul>
</div>
</div>
<!--  End product image  -->
</div>
</body>

</html>

<?php include 'partials/footer.php';?>
