<?php
include 'sql.php';

$nombre = addslashes($_POST['nombre']);
$origen = addslashes($_POST['origen']);
$destino = addslashes($_POST['destino']);
$edad = addslashes($_POST['edad']);
$referencia = addslashes($_POST['referencia']);
$tipo = addslashes($_POST['tipo']);
$ubicacion = addslashes($_POST['ubicacion']);
$tiempo = addslashes($_POST['tiempo']);
$acompa = addslashes($_POST['acompa']);

$encontrado = false;
while($encontrado == false){
	$Text = TextRand(6,FALSE,TRUE,FALSE);
	$Ident = mysql_query('SELECT identificador FROM checkin WHERE identificador = \''.$Text.'\'')or die(mysql_error());
		if($Ident == FALSE){
			$encontrado = false;
		}else{
			$encontrado = true;
		}
}
$Text = strtoupper($Text);
echo $Text;
$Datos = 'INSERT INTO checkin(nombre, ciudadO, ciudadD, edad, parentescoRef, referencia, ubicasion, tiempoV, acompannante, identificador) VALUES("'.$nombre.'","'.$origen.'","'.$destino.'","'.$edad.'","'.$referencia.'","'.$tipo.'","'.$ubicacion.'","'.$tiempo.'","'.$acompa.'","'.$Text.'")';

mysql_query($Datos)or die(mysql_error());

header('Location: registroCompleto.php?id='.$Text);
?>