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
        header("location:pagar.php");
    }
} else {
    header("location:login.php");
}
?>
<br><br><br>




<?php

if($_POST){
    $total=0;
    $SID=session_id();
    $Correo=$_SESSION["usuario"] ["email"];

    foreach($_SESSION['CARRITO'] as $indice=>$producto){

        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);//Estado...
    }

        $sentencia=$pdo->prepare("INSERT INTO `tblventas` 
        (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) 
        VALUES (NULL, :ClaveTransaccion, '', NOW(), :Correo, :Total, 'pendiente');");
        
        $sentencia->bindParam(":ClaveTransaccion",$SID);
        $sentencia->bindParam(":Correo",$Correo);
        $sentencia->bindParam(":Total",$total);
        $sentencia->execute();
        $idVenta=$pdo->lastInsertId();

       
       
        foreach($_SESSION['CARRITO'] as $indice=>$producto){
            $sentencia=$pdo->prepare("INSERT INTO 
            `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) 
            VALUES (NULL, :IDVENTA, :IDPRODUCTO, :PRECIOUNITARIO, :CANTIDAD, '0');");
//52-56
$sentencia->bindParam(":IDVENTA", $idVenta);
$sentencia->bindParam(":IDPRODUCTO",$producto['ID']);
$sentencia->bindParam(":PRECIOUNITARIO",$producto['PRECIO']);
$sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']);
$sentencia->execute();
//Elimina datos en la tabla por estos datos generados
//TRUNCATE TABLE tbldetalleventa
        }
  //  echo "<h3>".$total."</h3>";
}

?>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>


<style>
   
    /* Media query for mobile viewport */
    @media screen and (max-width: 400px) {
        #paypal-button-container {
           width: 100%;
        }
    }
   
    /* Media query for desktop viewport */
    @media screen and (min-width: 400px) {
        #paypal-button-container {
           width: 250px;
            display: inline-block;
        }
    }
   
</style>

<div class="jumbotron text-center">
    <h1 class="display-4">¡Paso Final!</h1>
    <hr class="my-4">
    <p class="lead">Estas a punto de pagar con PayPal la cantidad de:
        <h4>$<?php echo number_format($total,2);  ?> </h4>
        <div id="paypal-button-container"></div>
    </p>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates nulla eos sunt ratione sequi! Eum nam soluta amet, quis laborum aut adipisci maiores cupiditate inventore sapiente veritatis a, odit vero?
<br> <strong>(Para aclaraciones: info@weblearning.com)</strong>
    </p>
</div>



 
 
<script>
    paypal.Button.render({
        env: 'sandbox', // sandbox | production
        style: {
            label: 'checkout',  // checkout | credit | pay | buynow | generic
            size:  'responsive', // small | medium | large | responsive
            shape: 'pill',   // pill | rect
            color: 'gold'   // gold | blue | silver | black
        },
 
        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create
 
        client: {
           // sandbox:'ID',
            sandbox:'AZKUMZ9kvU-mkkqiWAlUovoqliEQk5wttQrS1DEQuz70N34zFM_Xs38bgXjUrqXn9vDD-NW7qITqK8Hs',
            //sandbox:'AZKUMZ9kvU-mkkqiWAlUovoqliEQk5wttQrS1DEQuz70N34zFM_Xs38bgXjUrqXn9vDD-NW7qITqK8Hs',
            //$Cl   "AZKUMZ9kvU-mkkqiWAlUovoqliEQk5wttQrS1DEQuz70N34zFM_Xs38bgXjUrqXn9vDD-NW7qITqK8Hs";

            //production: '<insert production client id>'
            production: 'AQIzcOAwIbBfttcIaK_UOlPeF0zIOXHM1dXoZkuC4CFOjj0GEOrlebusgPJfkMByO_vZRw2R__qIL3pJ'
        },
 
        // Wait for the PayPal button to be clicked
 
        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        { 
                            amount: { total: '<?php echo $total; ?>', currency: 'MXN' },
                            description:"Compra de productos a WebLearning:$<?php echo number_format($total,2);?>",
                            custom:"<?php echo $SID;?>#<?php echo openssl_encrypt($idVenta,COD,KEY); ?>"
                        }
                    ]
                }
            });
        },
 
        // Wait for the payment to be authorized by the customer
 
        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
                console.log(data);
                //window.alert('Pago completado!!');
            window.location="verificador.php?paymentToken="+data.paymentToken+"&paymentID="+data.paymentID;
            });
        }
   
    }, '#paypal-button-container');
 
</script>

<br><br>
<?php include 'partials/footer.php';?>