<?php 
echo '<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Welcome to No Pierdas Pista</title>

  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/home.css">

  <script src="js/vendor/custom.modernizr.js"></script>
  

</head>
<body>
  <div  id="img_cover" src"../LaBestiaDotCom/img/primavera.jpg">
    <div class="row">
      <div class="large-12 colums">
        <h1><font color="#FFFFFF">No Pierdas Pista</font></h1>
      </div>
    </div>
  </div>
  <nav class="top-bar">
    <ul class="title-area">
      <!-- Title Area -->
      <li class="name">
        <h1><a href="#"><img src="img/Logo1.png"  width="100" height="100"/> </a></h1>
      </li>
      <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>
    <section class="top-bar-section">
      <!-- Left Nav Section -->
      <ul class="left">
        <li class="divider"></li>
        <li class="active"><a href="index.php">Inicio</a></li>

        <li class="divider"></li>
        <li class="active"><a href="empleo.php">Empleo</a></li>

        <li class="divider"></li>
        <li class="has-dropdown"><a href="buscador.php">Casa</a>
          <ul class="dropdown">
            <li><a href="social.php">Social</a></li>
            <li class="divider"></li>
            <li><a href="actualizar.php">Ubicación</a></li>
            <li class="divider"></li>

          </ul>
          <li class="divider"></li>
        </li>
        <li class="has-dropdown"><a href="#">Migrantes</a>
          <ul class="dropdown">
            <li><a href="registro.php">Registro</a></li>
            <li class="divider"></li>
            <li><a href="actualizar.php">Ubicación</a></li>
            <li class="divider"></li>

          </ul>


          <li class="divider"></li>
          <li class="has-dropdown"><a href="buscador.php">Familia</a>
            <ul class="dropdown">
              <li><a href="buscador.php?paso=1&tipo=nombre">Buscar por nombre</a></li>
              <li class="divider"></li>
              <li><a href="buscador.php?paso=1">Buscar por C&oacute;digo</a></li>
            </ul>

          </li>
          <li class="divider"></li>
        </ul>
        <!-- Right Nav Section -->
        <ul class="right">
          <li class="divider hide-for-small"></li>

        </li>
        </li>
        <li class="divider show-for-small"></li>
        <li class="has-form">
          <a class="button" href="#">Login </a>

        </li>
      </ul>
    </section>
  </nav>

  <div style="padding:20px">
  </div>

  <div class="row">
    <div class="large-12 columns" style="border-radius: 5px">';
?>