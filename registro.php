<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
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
<div align="center">
<form action="reRegistro.php" method="post">
	<input type="text" size="60" name="nombre" id="nombre" class="TextBox" placeholder="Nombre y/o sobrenombre"  /><br />
	<input type="text" size="60" name="origen" id="origen" class="TextBox" placeholder="Lugar de Origen"  /><br />
	<input type="text" size="60" name="destino" id="destino" class="TextBox" placeholder="Lugar de Destino"  /><br />
	<input type="text" size="60" name="edad" id="edad" class="TextBox" placeholder="Edad"  /><br />
	<input type="text" size="60" name="referencia" id="referencia" class="TextBox" placeholder="Referencia"  /><br />
    <input type="text" size="60" name="tipo" id="referencia" class="TextBox" placeholder="Parentesco con referencia"  /><br />
	<input type="text" size="60" name="ubicacion" id="ubicacion" class="TextBox" placeholder="Ubicacion actual"  /><br />
	<input type="text" size="60" name="tiempo" id="tiempo" class="TextBox" placeholder="Tiempo viajando"  /><br />
	<input type="text" size="60" name="acompa" id="acompa" class="TextBox" placeholder="Acompañantes no registrados (Mujeres y Menores, solo cuantos)"  /><br />
    <input type="submit" value="Registrar" class="Boton" />
</form>
</div>
</body>
</html>
