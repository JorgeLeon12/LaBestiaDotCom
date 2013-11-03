<?php
include "superior.php";
?>

<div class="large-9 columns">


<fieldset><legend>Reporte de Incidencias </legend>
<?php

include 'sql.php';
if(isset($_POST['aconte']) && $_POST['aconte'] == 1){
	echo '
		
		<form action="reActualizar.php" method="post"><p>¿En qu&eacute; estado o lugar te encontrabas cuando sucedi&oacute; el acontecimiento que puso en riesgo tu integridad f&iacute;sica?</p>   
		<div class="large-6 columns">
	<select name="estado">
    <option></option>
	</div>
	'
	;
    
    $Estados = mysql_query('SELECT DISTINCT id FROM areas');
	while($rowEstados = mysql_fetch_row($Estados)){
		echo'<option value="'.$rowEstados[0].'">'.$rowEstados[0].'</option>';
	}
    echo '
	
	</select><br><textarea name="acont" style="width:100%; height:100%;" placeholder="¿Qu&eacute; fue lo qu&eacute; sucesi&oacute;? Por favor explica detalladamente para as&iacute; poder ayudar a otros compa&ntilde;eros migrantes."></textarea><br>
	
    <input type="submit" value="Enviar">
	
    
    <input type="hidden" name="nombre" value="'.$_POST['nombre'].'" >
    <input type="hidden" name="referencia" value="'.$_POST['referencia'].'" />
    <input type="hidden" name="codigo" value="'.$_POST['codigo'].'"  />
    <input type="hidden" name="cantidad" value="'.$_POST['cantidad'].'" />
	<input type="hidden" name="ciudad" value="'.$_POST['ciudad'].'" />
    <input type="hidden" name="aconte" value="'.$_POST['aconte'].'" />
	<input type="hidden" name="salud" value="'.$_POST['salud'].'" />
    </form>
	
	';
	
}else{
	$error = false;
	if(isset($_POST['estaddo'])){
		mysql_query('INSERT INTO reportes(estado, acontecimientos) VALUES ("'.$_POST['estado'].'","'.$_POST['acont'].'")')or die(mysql_error());
	}
	if(!empty($_POST['codigo'])){
		$id = mysql_query('SELECT id FROM checkin WHERE identificador = "'.$_POST['codigo'].'"');
		if($id == false){
			$error = true;
		}
		$rowId = mysql_fetch_row($id);
	}else if(empty($_POST['codigo']) or $error == true){
		$id = mysql_query('SELECT id FROM checkin WHERE nombre = "'.$_POST['nombre'].'" AND referencia = "'.$_POST['referencia'].'"');
		$rowId = mysql_fetch_row($id);
		$TTid = $rowId[0];
	}
	
	$TFecha = mysql_query('SELECT tiempoV, fechaActual FROM checkin WHERE id = \''.$rowId[0].'\'');
	$rowFecha = mysql_fetch_array($TFecha);
			
	$Fecha = explode(" ", $rowFecha['fechaActual']);
	
	$hoy = getdate();
	
	$datetime1 = new DateTime($Fecha[0]);
	$datetime2 = new DateTime($hoy['year'].'-'.$hoy['mon'].'-'.$hoy['mday']);
	$interval = $datetime1->diff($datetime2);
	$Dias =  $interval->format('%a');
	
	$hoy = getdate();
	
	$Dias = $Dias + $rowFecha['tiempoV'];
		
	mysql_query('UPDATE checkin SET salud = "'.$_POST['salud'].'", ubicasion = "'.$_POST['ciudad'].'", tiempoV = "'.$Dias.'", acompannante = "'.$_POST['cantidad'].'" WHERE id = "'.$rowId[0].'"')or die(mysql_error());
	echo'<script>alert("Gracias por actualizar tus datos! ahora tu familia podra saber tu ubicacion.");</script>';
	
	header('Location: index.php');
}

?>
</fieldset>

</div>

<?php
include "inferior.php";
?>
      