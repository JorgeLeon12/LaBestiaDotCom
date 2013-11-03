<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form action="reActualizar.php" method="post">
    <input type="text" name="nombre" placeholder="Nombre o Sobrenombre" /><br />
    <input type="text" name="referencia" placeholder="Datos de Contacto" /><br />
    <input type="text" name="codigo" placeholder="Codigo Unico" /><br />
    <input type="text" name="ciudad" placeholder="Ciudad Actual" /><br />
    <input type="text" name="salud" placeholder="Salud" /><br />
    <input type="text" name="cantidad" placeholder="Numero de acompañantes" /><br />
    ¿Acontecio algo que puso en riesgo tu integridad fisica?<br />
    <input type="radio" name="aconte" value="1" />Si
    <input type="radio" name="aconte" value="0" style="margin-left:80px;" checked="checked"  /> No<br />
    <input type="submit" value="Actualizar datos" />
</form>
</body>
</html>
