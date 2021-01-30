<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<script src="js/simplyCountdown.min.js"></script>
<script src="js/countdown.js"></script>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
          <a class="navbar-brand" href="index.php">Web Learning</a>

         
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav"><div class="clearfix"></div>
        <img class="ilogo" src="Img/learning.png" alt=""  width="40px" height="40px" title="WebLearning">
          
            <li class="active" title="Home"><a href="index.php"> Inicio</a></li>
            <li id="nav">

   <ul>
     
   <li> 
        <br>
        <img class="cate" src="Img/list.svg" alt="" srcset="" width="15px" height="35px" >    
        <a class="category" href="#">Categorias
               </a> 
      <ul class="menucategorias"> 
      <li><a href="Cursosg.php">🎓 Cursos gratis</a></li> 
          <li><a href="cursosp.php">🎓 Cursos premium</a></li> 
          <li><a href="categoria_desarrollo.php">💻 Desarrollo</a></li>
          <li><a href="categoria_diseño.php">🖌️ Diseño</a></li>
          <li><a href="categoria_marketing.php">🎯 Marketing</a></li>
          <li><a href="categoria_matematicas.php">🔢 Matemáticas</a></li>
          <li><a href="categoria_idiomas.php">🌎 Idiomas</a></li> 

       
                      
          </ul>   
      </li>
  </ul>
  </li>
            <!--<li><a href="cerrar-sesion.php">Cerrar sesión</li>-->
            <?php if (!isset($_SESSION["usuario"])) {?>
            <li><a href="login.php">Iniciar sesión</a></li>
            <span>|</span>
            
            <li><a href="registroprof.php">Registrarse Como Profesor</a></li>
            <li><a href="#"></a></li>
          
            <li><a href=""></a></l>
          <li><a href=""></a></l>
    
          <li><a href=""></a></li>
          <li class="nav-item">
          <a class="nav-link" href="mostrarCarrito.php" tabindex="-1" aria-disabled="true">🛒 Carrito (<?php
              
              echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
   
   ?>) </a>
                </li>
         
          <li> <!-- <input type="search" id="input-search" placeholder="Buscar en Web Learning.."> --> </li>
            
            <?php } else {
    ?>
              <?php if ($_SESSION["usuario"]["privilegio"] == 1) {?>
              <li><a href="admin.php">Instructor</a></li>
              <?php } else {?>
              <li><a href="usuario.php">👤 Perfil</a></li>
              <li class="nav-item">
                   <a class="nav-link" href="mostrarCarrito.php" tabindex="-1" aria-disabled="true">🛒 Carrito (<?php
              
              echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
   
   ?>) </a>
                </li>
            <?php }

}?>
          </ul>
        </div><!--/.nav-collapse -->

<!--Buscar-->

<script src="js/search.js"></script>

      </div>
    </nav>

    <!--
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-767e98ff-5912-430e-8e0f-f88c713cebf5"></div>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-58eb09e9-86a2-4c9e-b0a2-dcea9c2e82ec"></div>-->