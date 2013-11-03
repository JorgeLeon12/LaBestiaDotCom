<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>
<body>
<div align="center">
<form action="buscador.php" method="post">
<?php
include 'sql.php';

if(isset($_POST['paso']) && $_POST['paso'] == '1'){
	if($_POST['tipo'] == 'nombre'){
    	echo '
        <input type="text" name="dato1" placeholder="Nombre o Sobrenombre" />
        <input type="text" name="dato2" placeholder="Referencia (Tel/Correo/Nombre/Etc.)" />
        <input type="hidden" name="paso2" value="1" />
        ';
    }else{
    	echo '
    	<input type="text" name="dato1" placeholder="Código de identificacion" />
        <input type="hidden" name="paso2" value="2" />';
    }
    echo '<input type="hidden" name="paso" value="2" />';
}else if(isset($_POST['paso']) && $_POST['paso'] == '2'){
	if($_POST['paso2'] == '1'){
    	$Query = 'SELECT id FROM checkin WHERE nombre = "'.$_POST['dato1'].'" AND referencia = "'.$_POST['dato2'].'"';
    }else if($_POST['paso2'] == '2'){
    	$Query = 'SELECT id FROM checkin WHERE identificador = "'.$_POST['dato1'].'"';
    }
	$Dato = mysql_query($Query)or die(mysql_error());
    $rowDato = mysql_fetch_row($Dato);
	var_dump($rowDato[0]);
    echo $rowDato[0]."-".$Query;
	header('Location: encontrado.php?id='.$rowDato[0]);
}else{
	echo '
		<input type="radio" name="tipo" value="nombre" />Nombre o Sobrenombre<br />
		<input type="radio" name="tipo" value="codigo" />Código Unico<br />
        <input type="hidden" name="paso" value="1" />
        ';
}
?>
<input type="submit" value="Siguiente paso" />
</form>
</div>
</body>
</html>
