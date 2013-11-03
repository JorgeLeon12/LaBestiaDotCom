<?php
include "superior.php";
?>


<div class="large-9 columns">
	<fieldset><legend>Actualizaci&oacute;n de Ubicaci&oacute;n</legend>
        <div class="large-12 columns">               
            <form action="reActualizar.php" method="post" class="custom">
            	<div class="large-3 columns">
                <label>C&oacute;digo Identificador <font color="#FF0000">*</font></label>
            	 	<input type="text" name="codigo"/>
                </div>
                <div class="large-9 columns">
            		<label>Nombre y/o Apodo</label>                
                    <input type="text" name="nombre" />
                </div>
                <div class="large-9 columns">
                	<label>Ciudad Actual</label>
                	<input type="text" name="ciudad" />
                </div>
                <div class="large-3 columns">
                <label>No. acompa&ntilde;antes</label>
                <input type="text" name="cantidad" />
                </div>
                <div class="large-12 columns">
                	<label>Nombre o datos de su contacto</label>
                    <input type="text" name="referencia" placeholder="Puede especificar el nombre o el dato de su contacto registrado." />
                </div>
                <div class="large-13 columns">
                <label>Estado de Salud</label>
                <input type="text" name="salud" placeholder="Escriba una breve descripci&oacute;n de su estado de salud." />
                </div>
                    
                    <div class="large-12 columns">                    
                    <p>¿Aconteci&oacute; algo que puso en riesgo tu integridad f&iacute;sica?</p>
                    </div>  
                    <div class="large-12 columns">                    
                    
                        <input name="aconte" type="radio" value="1" style="display:none;">
                        <span class="custom radio"></span> Si                      
                      
                        <input name="aconte" type="radio" value="2" style="display:none;" checked="checked">
                        <span class="custom radio cheked"></span> No
                     
                      </div>
                  	<div class="large-12 columns" align="center">                   
                    <input type="submit" value="Actualizar datos" class="button" />
                    </div>
                    <div class="small-12 columns">
                    	<font color="#FF0000" size="2"><b>* En caso de no recordar su c&oacute;digo por favor rellene los campos restantes para poder identificarlo</b></font>
                    </div>
                </form>
              
        </div>
    </fielset>
</div>

<?php
include "inferior.php";
?>
