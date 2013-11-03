<?php
include "superior.php";
?>


<div style="background-color:#00CC00">
	<div class="large-12 column">
		<fieldset><legend>Estado</legend>
			<div class="large-12"  align="center"  style="width:100%; height:100%">  
				<?php
				include "sql.php";
				$Datos = mysql_query('SELECT id, nombre, ciudadO, fechaActual, acompannante, salud, identificador FROM checkin WHERE identificador = \''.$_GET['id'].'\' ORDER BY id DESC')or die(mysql_error());
				
				while($rowDatos = mysql_fetch_array($Datos)){
					if($rowDatos['acompannante'] > 0 ){
						$Acomp = 'Acompa&ntilde;antes: '.$rowDatos['acompannante'].'';
					}else{
						$Acomp = "";
					}
					$Fecha = explode(" ", $rowDatos['fechaActual']);
					echo '	
					<h3>Nombre o Sobrenombre: '.$rowDatos['nombre'].'<br />
					Ciudad de origen: '.$rowDatos['ciudadO'].'<br />
					Ultima fecha: '.$Fecha[0].'<br />
					Estado de Salud: '.$rowDatos['salud'].'<br />'.$Acomp.'<br />
					Codigo Unico: '.$rowDatos['identificador'].'
					</h3>';
				}
				echo '

			</div>
		</fieldset>
	</div>
</div>

<div>
	<div class="large-12 column">
		<fieldset><legend>Ubicaci&oacute;n</legend>
			<div class="large-12"  align="center"  style="width:100%; height:100%">    
				<iframe src="Mapa.php?tipoMapa=1&ID='.$_GET['id'];?>" frameborder="0" style=" height:70%; width:100%;"></iframe>
			</div>
		</fieldset>
	</div>
</div>

<?php
include "inferior.php";
?>
