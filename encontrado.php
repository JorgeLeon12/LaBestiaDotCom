<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<style>
	@charset "utf-8";
html, body, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, caption{
	margin:0;
	border:0;
	outline:0;
	
}
</style>
</head>

<body >
<div style="height:100%; width: calc(100% - 651px); float:left;	">
    <iframe src="MapaUbicacion.php?id=<?php echo $_GET['id']; ?>" frameborder="0" style="width: 100%; height: 100%;"></iframe>
</div>
<div style="height:100%; width: 650px; float:right; background-color:#00CC00;">
	<?php
	include "sql.php";
	
	$Datos = mysql_query('SELECT nombre, ciudadO, fechaActual, acompannante FROM checkin WHERE id = \''.$_GET['id'].'\' ORDER BY id DESC ')or die(mysql_error());
	
	while($rowDatos = mysql_fetch_array($Datos)){
		$rowDatos['acompannante'] = 3;
		if($rowDatos['acompannante'] > 0 ){
			$Acomp = 'Acompa&ntilde;antes: '.$rowDatos['acompannante'].'';
		}else{
			$Acomp = "";
		}
		$Fecha = explode(" ", $rowDatos['fechaActual']);
		echo '
		<h3>Nombre o Sobrenombre: '.$rowDatos['nombre'].'<br />
		Ciudad de origen: '.$rowDatos['ciudadO'].'<br />
		Ultima fecha: '.$Fecha[0].'<br />'.$Acomp."</h3>";
	}
	?>
</div>
</body>
</html>
