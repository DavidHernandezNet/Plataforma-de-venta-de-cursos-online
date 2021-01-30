<?php
include 'carrito.php';?>

<br>
<br><br>
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Oxxo_Logo.svg/1200px-Oxxo_Logo.svg.png" alt="" srcset="" width=90px height="40px">

<h3>Deposite en su tienda oxxo mas cercana</h3>
<p><b> Dicte al cajero este codigo y listo</b></p>
<?php
$s=" ";
  $d=rand(10,90);
  echo $d ;
  $d=rand(10,90);
  $d=rand(10,90);
  echo $d ;
  $d=rand(10,90);
  echo $s;

  $d=rand(10,90);
  echo $d ;
  $d=rand(10,90);
  $d=rand(10,90);
  echo $d ;
  $d=rand(10,90);
  echo $s;


  $d=rand(10,90);
  echo $d ;
  $d=rand(10,90);
  $d=rand(10,90);
  echo $d ;
  $d=rand(10,90);
  echo $s;

  
  $d=rand(10,90);
  echo $d ;
  $d=rand(10,90);
  $d=rand(10,90);
  echo $d ;
  $d=rand(10,90);
  echo $s;
?>
<p>Acreditación Inmediata</p>
<h4><b>Compraste:</b></h4>	 
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
<form action="index.php" method="post">


<button class="btn btn-primary btn-lg btn-block" type="submit"
name="btnAccion"
value="proceder">
Imprimir
</button>
</form>
