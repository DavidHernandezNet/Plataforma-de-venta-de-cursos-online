<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) {
        header("location:pagar-js.php");
    } 
} else {
    header("location:login.php");
}
?>  
