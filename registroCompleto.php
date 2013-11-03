<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<div align="center">
Registro Completado.<br />
Su código único de viajero es "<?php echo $_GET['id']; ?>", y podra ser escaneado con la siguiente imagen:
<br />
<br />
<?php
	include('./qr/qrlib.php');
	QRcode::png($_GET['id'], "QR.png", "L", 10, 2);
?>
<img src="QR.png" />
<div>
</body>
</html>
