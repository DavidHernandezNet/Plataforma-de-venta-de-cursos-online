<?php 
include 'partials/head.php';
include 'partials/menu.php';
include '../global/config.php';
include '../global/conexion.php';
include '../carrito.php';
?>

<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
        header("location:cursosp.php");
    } 
} else {
    header("location:login.php");
?>  
<!--Inicio Cursos pago-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos premium</title>
    <link rel="shortcut icon" href="Img/learning.png">
    <link rel="stylesheet" href="Css/styles.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
        <div id="banner">
        <div class="slide">
                <ul>   
                    <li><img src="Img/php-y-mysql-3_14.jpg" alt="" width="70%" height="400px"></li>
                    <li><img src="Img/cursocss.jpg" alt="" width="100%"  height="400px"></li>
                    <li><img src="Img/cursos-de-diseño-web-con-html5-tecgurus-mexico.jpg" alt="" width="70%"  height="400px"></li>
                    <li><img src="Img/cursos-de-programacion-web.png" alt="" width="100%" height="400px"></li>
                    <li><img src="Img/desarrollo web movil cursos gratis.jpg" alt="" width="100%" height="400px"></li>
                    <li><img src="Img/cursos-gratuitos-de-diseno-web.jpg" alt="" width="100%" height="400px"></li>
                    <li><img src="Img/f6.jpg" alt="" width="100%" height="400px"></li>
                </ul>
            </div>
        </div>

    <a class="btn btn-success" href="cursosp.php"> Cursos Premium</a>
    <p class="separador">|</p>
    <a class="btn btn-success" href="Cursosg.php"> Cursos Gratuitos</a>

   <center> <h3 class="titulop">Algunos Cursos Premium <hr></h3></center>


   
   <div class="containertar">
     <?php echo $mensaje;?>
     <div class="col-3">
    <?php echo $mensaje;?>
    
             <?php
               $sentencia=$pdo->prepare("SELECT * FROM `tblproductos` ");
               $sentencia->execute();
               $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            ?>

         <?php foreach($listaProductos as $producto){?>
   
        <div class="card">
           <img 
            src="<?php echo $producto['Imagen'];?>">
            <h4><?php echo $producto['Nombre'];?></h4>
            <b><?php echo $producto['Descripcion'];?></b>
            <h5> $ <?php echo $producto['Precio'];?></h5>
        
           <center>
           <fieldset class="val-fieldset"><span class="valoracion val-35"></span></fieldset></center>
         <br>
                    
            <form action="" method="POST">
            <a href ="">Ver Curso</a>
            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
            <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
            <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
            <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">

                     <button class="btn-primary"
                      name="btnAccion"
                      value="Agregar"
                      type="submit"
                      >
                           🛒
                        </button>
                        </form>
                        </div>
                   
                   </div>
               </div>
           </div>
           
       </div>
       </div>
       
       
       
            
<?php } ?>  




</body>
<br>
</html>
<?php include 'partials/footer.php';?>