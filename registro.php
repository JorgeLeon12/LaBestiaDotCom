<?php
include "superior.php";
?>

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
          <label>Tiempo de viaje (D&iacute;as Aprox.)</label>
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


  <?php
  include "inferior.php";
  ?>

