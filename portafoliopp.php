<?php
  require 'php/conexion.php';
  $bd = new MySQL();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<title>MAGNO FOTO ESTUDIO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="img/magno.jpeg" style="width:100%;" class="w3-round" aling="center"><br><br>
    <h4><b>MAGNO FOTO ESTUDIO</b></h4>    
  </div>
  <div class="w3-bar-block">
    <a href="indexpp.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>INICIO</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACTO</a>
    <a href="#redes" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>REDES SOCIALES</a> 
  </div>
  <div class="w3-panel w3-large">
    <a href="https://www.facebook.com/MagnoCercas" target="_black"><i class="fa fa-facebook-official w3-hover-opacity"></i></a></li>
    <a href="https://www.instagram.com/Magnocercas/" target="_black"><i class="fa fa-instagram w3-hover-opacity"></i></a></li>
    <a href="https://www.tiktok.com/@mailofoto" target="_black"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
      <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
    </svg></a></li>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="portafoliopp.php"><img src="img/logo1c.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1 id="inicio"><b>Mi Portfolio</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <button href="#" class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Fotos</button>
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <?php
      $bd->primerLinea();
    ?>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
  <?php
      $bd->segundaLinea();
    ?>
  </div>

  <!-- Third Photo Grid-->
  <div class="w3-row-padding">
    <?php
      $bd->tercerLinea();
    ?>
    </div>
      
  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
    </div>
  </div>
  
  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contactame</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-user fa-fw w3-xxlarge w3-text-light-grey"></i></p>
        <p>Toca cualquiera<br>para contactarte ⇨</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>Enviame un correo:<br><a href="mailto:foto.mc.foto@gmail.com">foto.mc.foto@gmail.com<a></p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>Teléfono:<br><a href="tel:324873294">324873294<a></p>
      </div>
    </div>
    <main align="center">
      <header id="Mapa">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d528.3492782766874!2d-97.96254731468024!3d19.938303418709847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d06f279059e9ed%3A0x7185da670751f382!2sMagnoFoto!5e1!3m2!1ses!2smx!4v1691425674565!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </header>
    </main>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding" aling="center">
    <div class="w3-center">
      <h3 id="redes">Redes Sociales</h3>
      <a href="https://www.facebook.com/MagnoCercas" target="_black"><i class="fa fa-facebook-official w3-hover-opacity w3-xxlarge"></i></a></li>
      <a href="https://www.instagram.com/Magnocercas/" target="_black"><i class="fa fa-instagram w3-hover-opacity w3-xxlarge"></i></a></li>
      <a href="https://www.tiktok.com/@mailofoto" target="_black"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
        <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
        </svg></a></li>
    </div>
  </div>
  <br>
  <div class="w3-center">
    <div class="w3-bar">
      <a href="#inicio" class="w3-bar-item w3-black w3-button"><i class="fa fa-bars w3-margin-right"></i>INICIO</a>
    </div>
  </div>
  </footer>
  <div class="w3-black w3-center w3-padding-24">Magno Foto Estudio</div>
<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
