<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/home.css">

<style>
.TextBox{
	padding:15px 60px 15px 60px;
	font-size:18px;
	border-color:#000000;
	border-radius:15px;
}
.Boton{
	padding:15px 40px 15px 40px;
	background-color:#ffffff;
	border-color:#000000;
	font-size:16px;
	border-radius:5px;
}
</style>
</head>

<body bgcolor="#D4FAF5">

<div style="background-image:url(img/portad.jpg); background-repeat:no-repeat; background-position:bottom">
    <div class="row" >
      <div class="large-12 colums">
        <h1><font color="#FFFFFF">La Bestia</font></h1>
      </div>
    </div>
  </div>
  <nav class="top-bar">
    <ul class="title-area">
      <!-- Title Area -->
      <li class="name">
        <h1><a href="#"><img src="../Imagenes/Background/gdlExtreme1.png"  width="100" height="100"/> </a></h1>
      </li>
      <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>
    <section class="top-bar-section">
      <!-- Left Nav Section -->
      <ul class="left">
        <li class="divider"></li>
        <li class="active"><a href="Home.html">Inicio</a></li>

        <li class="divider"></li>
        <li class="active"><a href="calendario.html">Empleo</a></li>

        <li class="divider"></li>
        <li class="has-dropdown"><a href="#">Casa</a>
          <ul class="dropdown">
            <li><a href="skate.html">Migrantes</a></li>
            <li class="divider"></li>
            <li><a href="moto.html">Información</a></li>
            <li class="divider"></li>
            <li><a href="moto.html">Social</a></li>
            <li class="divider"></li>
            <li><a href="moto.html">Ubicación</a></li>
            <li class="divider"></li>

          </ul>
          <li class="divider"></li>
        </li>
        <li class="has-dropdown"><a href="#">Migrantes</a>
          <ul class="dropdown">
            <li><a href="skate.html">Registro</a></li>
            <li class="divider"></li>
            <li><a href="moto.html">Ubicación</a></li>
            <li class="divider"></li>

          </ul>


          <li class="divider"></li>
          <li class="has-dropdown"><a href="#">Familia</a>
            <ul class="dropdown">
              <li><a href="skate.html">Información</a></li>
              <li class="divider"></li>
            </ul>

          </li>
          <li class="divider"></li>
        </ul>
        <!-- Right Nav Section -->
        <ul class="right">
          <li class="divider hide-for-small"></li>

        </li>
        <li class="divider"></li>
        <li class="has-form">
          <form>
            <div class="row collapse">
              <div class="small-8 columns">
                <input type="text">
              </div>
              <div class="small-4 columns">
                <a href="#" class="button">B&uacute;squeda</a>
              </div>
            </div>
          </form>
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
    <div class="large-9 columns" style="border-radius: 5px">
      <div class="row">
<div class="large-9 columns">
<form action="reRegistro.php" method="post">
	<fieldset>
    <legend>Registro</legend>    
	<div class="row">
    	
		<div class="large-8 columns">
    <label>Nombre y/o Apodo</label>
	<input type="text" size="60" name="nombre" id="nombre" class="TextBox" />
    	</div>
        
        <div class="large-2 columns">
        	<label>G&eacute;nero</label>
        	<select id="sexo" class="small">
            <option  selected="selected" value="">Sin especificar</option>
    		<option value="M">Masculino</option>
   			<option value="F">Femenino</option></select>       
        </div>
        
        <div class="large-2 columns">
        	<label>Edad</label>
        	<input type="text" size="60" name="edad" id="edad" class="TextBox"  />        	
        </div>
        
    	<div class="large-5 columns">
        <label>Lugar de Origen</label>
	<input type="text" size="60" name="origen" id="origen" class="TextBox" />
   		</div>

		<div class="large-5 columns">
        <label>Lugar de Destino</label>
		<input type="text" size="60" name="destino" id="destino" class="TextBox" />
        </div>
        
        <div class="large-2 columns">
        <label>Acompañantes</label>
        <input type="text" size="60" name="acompa" id="acompa" class="TextBox" />
        </div>
    
    <div class="large-6 columns">
     <label>Ubicación Actual</label>
	<input type="text" size="60" name="ubicacion" id="ubicacion" class="TextBox"/> 
    </div>
    <div class="large-6 columns">
    <label>Tiempo de viaje</label>
    <input type="text" size="60" name="tiempo" id="tiempo" class="TextBox" placeholder=""  />    
    </div>
 	 
    <div class="large-12 columns">
    <label>Nombre de contacto</label>
    <input type="text" size="60" name="tipo" id="referencia" class="TextBox" placeholder="Puede especificar el parentesco (Madre, Padre, Esposa, etc.)"  />	
    <label>Datos de contacto</label>  
	<input type="text" size="60" name="referencia" id="referencia" class="TextBox" placeholder="Teléfono/Correo/Dirección Postal (Los datos no serán compartidos)"/>
    </div>
	
    <div class="large-12 columns" align="right" style="margin-top:5%">   
    <input type="submit" value="Registrar" class="button" />
    </div>
    </div>
    </fieldset>    
</form>
</div>
</div>

    </div>
    <div class="large-3 columns" style="background-color:#3887FF;border-radius:10px">
      <div align="center" style=" margin-top:5%">        
        <a class="button" href="#">Registro</a>        
      </div>
      <div align="center" style=" margin-top:5%">        
        <img width="150" src="img/Mapa.png"/>     
      </div>
      <div align="center">
        <div class="large-5" style="margin-top:10%">
          
              <img width="50" src="img/facebook.png" />                
              
               <img width="50" src="img/twitter.png"/> 
            
        </div> 
        	<div class="flex-video">
        	<iframe width="140" height="81" src="//www.youtube.com/embed/VMzUpbjLziI" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>	
        	
      </div>
    </div>

    <script>
    document.write('<script src=' +
      ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
      '.js><\/script>')
    </script>


    <script src="js/foundation.min.js"></script>


    <script>
    $(document).foundation();
    </script>


</body>
</html>
