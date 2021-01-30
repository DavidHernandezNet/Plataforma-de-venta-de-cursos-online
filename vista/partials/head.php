<!DOCTYPE html>
<html lang="es">
  <head>
    <?php 
    session_start();?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type='text/javascript' src='validarpass.js'></script>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title></title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="js/jquery.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css" />
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-767e98ff-5912-430e-8e0f-f88c713cebf5"></div>
  </head>
  <body>
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v6.0"></script>

<script>
if(formulario.password.value != formulario.confirmarpass.value ){
  alert("los caracteres no coinciden");
}else{
  alert("Gracias por registrarte");
}
</script>