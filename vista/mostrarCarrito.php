<?php 
include '../global/config.php';
include '../carrito.php';
include 'partials/head.php';
include 'partials/menu.php';
?>
<br>
<br><br>
<h3>Añadidos al carrito</h3><br>

<?php
if(!empty($_SESSION['CARRITO'])) { ?>

<table class="table table-light table-bordered">
    <tbody>
        <tr>
            <th width="40%">Descripción</th>
            <th width="15%">Cantidad</th>
            <th width="20%">Precio</th>
            <th width="20%">Total</th>
            <th width="5%">--</th>
        </tr>

        <?php $total=0; ?>
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){?>
        <tr>
            <td width="40%"><?php echo $producto['NOMBRE']?></td>
            <td width="15%" class="text-center"> <?php echo $producto['CANTIDAD']?></td>
            <td width="20%" class="text-center">$<?php echo $producto['PRECIO']?></td>
            <td width="20%" class="text-center">$ <?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2); ?></td>
        <td width="5%"> 

        <form action="" method="post">
  
            <input type="hidden" 
            name="id" 
            id="id" 
            value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">

            <button 
            class="btn-danger" 
            type="submit"
            name="btnAccion"
            value="Eliminar"
            >Eliminar</button>
         
            </form>
                
        </td>
            </tr>
            <?php $total=$total + ($producto['PRECIO']*$producto['CANTIDAD']); ?>
            <?php } ?>
    

        <tr>
            <td colspan="3" align="right"> <h3>Total</h3> </td>
        <td align="right"><h3>$<?php echo number_format($total,2);?> </h3></td>
        <td></td>
        </tr>  



    </tbody>
    </table>
    <?php } else{ ?>

   <div class="alert alert-success" role="alert">
    No has agregado productos al carrito..
   </div>
  <?php }?>

<!--accion para el pago-->
<form action="pagar.php" method="post">
<center> <h2>Proceder al pago con:</h2></center>

<button class="btn btn-primary btn-lg btn-block" type="submit"
name="btnAccion"
value="proceder">

PayPal <img src="Img/paypal.png" alt="" srcset="">
</button>
</form>

<a class="btn btn-primary btn-lg btn-block"  href="../PDF_Pago.php"> Deposito en OXXO
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Oxxo_Logo.svg/1200px-Oxxo_Logo.svg.png" alt="" srcset="" width=40px height="30px">
</a>


<a class="btn btn-primary btn-lg btn-block"  href="pagartarjeta.php"> Tarjeta de credito o debito
<img src="https://d31dn7nfpuwjnm.cloudfront.net/images/valoraciones/0015/1298/143.jpg?1398784046" alt="" srcset="" width=70px height="40px">
</a>

    <br><br><br>
    <?php include 'partials/footer.php';?>
  