<?php
include 'sql.php';
?>
<!DOCTYPE HTML public "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0068)http://www.geocodezip.com/v3_markers_normal_colored_infowindows.html -->
<!DOCTYPE html public "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><HTML 
xmlns:v="urn:schemas-microsoft-com:vml" 
xmlns="http://www.w3.org/1999/xhtml"><head><meta content="IE=10.000" 
http-equiv="X-UA-Compatible">
 
<meta name="viewport" content="initial-scale=1.0, user-scalable=no"> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
<title>LaBestiaDotCom</title> 
<script src="./JsGoogle/js.js" type="text/javascript"></script>
 
<style type="text/css">
html, body { height: 100%; } 
</style>
 
<script type="text/javascript"> 
//<![CDATA[
function localizar(){
//new google.maps.LatLng(20.674427,-103.385425/*20.672299,-103.381691*/)
	initialize(new google.maps.LatLng(32.563512051219696,-97.470703125), "a", "a");
	navigator.geolocation.getCurrentPosition(mapa);
}
function mapa(pos){
	var contenedor = document.getElementById("map_canvas");
	var latitud = pos.coords.latitude;
	var longitud = pos.coords.longitude;
	var precision = pos.coords.accuracy;//
		
	var centro = new google.maps.LatLng(latitud, longitud);
	initialize(centro, latitud, longitud);
}

function error(errorC){
	if(errorC.code == 0)
		alert("error desconocido");
	else if(errorC.code == 1)
		alert("No dejaste ubicarte");
	else if(errorC.code == 2)
		alert("Posicion no Disponible");
	else if(errorC.code == 3)
		alert("Me Rendi");
}
function initialize(centro, latitud, longitud){
  var myOptions = {
	zoom: 5,
	center: centro,//new google.maps.LatLng(20.674427,-103.385425/*20.672299,-103.381691*/),
	mapTypeControl: true,
	mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
	navigationControl: true,
	mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
 
	google.maps.event.addListener(map, 'click', function() {
		infowindow.close();
		});
	
	//var latitud = pos.coords.latitude;
	//var longitud = pos.coords.longitude;
		
	setMarkersUsr(map, latitud, longitud);
	setMarkers(map, beaches);
	
    <?php
	if(isset($_GET['tipoMapa']) && $_GET['tipoMapa'] == '1'){
	}else{
		$ID = mysql_query('SELECT id FROM areas GROUP BY id');
		while($rowID = mysql_fetch_array($ID)){
			echo "var DatPoli".$rowID[0]." = [";
			$LatLon = mysql_query('SELECT latitud, longitud FROM areas WHERE id = \''.$rowID[0].'\'');
			while($rowLatLon = mysql_fetch_array($LatLon)){
				echo "new google.maps.LatLng(".$rowLatLon[0].", ".$rowLatLon[1]."),";
			}
			echo '];';
			
			echo '
				poligono'.$rowID[0].' = new google.maps.Polygon({
					paths: DatPoli'.$rowID[0].',
					strokeColor: "#FF0000",
					strokeOpacity: 0.8,
					strokeWeight: 2,
					fillColor: "#FF0000",
					fillOpacity: 0.1
				});
				
				poligono'.$rowID['id'].'.setMap(map);
			';
		}
	}
	?>
}
var icons = new Array();
icons["red"] = new google.maps.MarkerImage("mapIcons/marker_red.png",
      new google.maps.Size(32, 37),
      new google.maps.Point(0,0),
      new google.maps.Point(16, 37));
function getMarkerImage(iconColor) {
   if ((typeof(iconColor)=="undefined") || (iconColor==null)) { 
      iconColor = "red"; 
   }
   if (!icons[iconColor]) {
      icons[iconColor] = new google.maps.MarkerImage("./mapIcons/"+ iconColor +".png",
      new google.maps.Size(32, 37),
      new google.maps.Point(0,0),
      new google.maps.Point(16, 37));
   } 
   return icons[iconColor];
}
  var iconImage = new google.maps.MarkerImage('mapIcons/marker_red.png',
      new google.maps.Size(32, 37),
      new google.maps.Point(0,0),
      new google.maps.Point(16, 37));
  var iconShadow = new google.maps.MarkerImage('http://www.google.com/mapfiles/shadow50.png',
      new google.maps.Size(32, 37),
      new google.maps.Point(0,0),
      new google.maps.Point(16, 37));
  var iconShape = {
      coord: [16,4,16,32,2,16,28,15,27,21,21,25,19,28,6,13,11,8,20,5,24,9,23,13,19,13,17,8,14,13,13,18,14,21,13,25,12,27,7,21,5,19,10,14,8,16,18,21,23,19,16,16,16,24,8,24,24,25,19,16,21,8],
      type: 'poly'
  };
var infowindow = new google.maps.InfoWindow(
  { 
    size: new google.maps.Size(0,0)
  });
    
function createMarker(map, latlng, label, html, color, drag){
    var contentString = label;
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        shadow: iconShadow,
        icon: getMarkerImage(color),
        shape: iconShape,
		
		draggable: drag,
	    animation: google.maps.Animation.DROP
//		animation:drop,
//        title: label,
//        zIndex: Math.round(latlng.lat()*-100000)<<5
        });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(contentString); 
        infowindow.open(map,marker);
        });
}
var beaches = [
<?php
	if(isset($_GET['tipoMapa']) && $_GET['tipoMapa'] == '1'){
		$OMG2 = mysql_query('SELECT * FROM checkin WHERE identificador = \''.$_GET['ID'].'\' ORDER BY id ASC');
		while($OMG = mysql_fetch_array($OMG2)){
			echo "['<b>".$OMG['nombre']."</b><br>".$OMG['referencia']."', ".$OMG['latitud'].", ".$OMG['longitud'].", \"punteroGeo\"],";
		}	
	}else{
		$OMG2 = mysql_query ('SELECT * FROM mapa ORDER BY id ASC');
		while($OMG = mysql_fetch_array($OMG2)){
			echo "['<b>".$OMG['nombre']."</b><br>".$OMG['descripcion']."', ".$OMG['latitud'].", ".$OMG['longitud'].", \"".$OMG['tipo']."\"],";
		}	
	}
?>
];
 
function setMarkers(map, locations) {
 
  for (var i = 0; i < locations.length; i++) {
    var beach = locations[i];
    var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
    var marker = createMarker(map,myLatLng,beach[0],beach[0],beach[3], false);
  }
}
function setMarkersUsr(map, latitud, longitud) {
//function createMarker(map, latlng, label, html, color) {
//	['Maroubra Beach', -33.950198, 151.259302, "orange"]
    var marker = createMarker(map,new google.maps.LatLng(latitud, longitud),"Mi Ubicaci&oacute;n Actual","Mi Ubicaci&oacute;n Actual","punteroMigrante",false);
}
//]]>
</script>
 
<body style="margin: 0px; padding: 0px;" onLoad="localizar()"><!--initialize()-->
<div id="map_canvas" style="width: 100%; height: 100%;"></div>
<script src="./JsGoogle/urchin.js" type="text/javascript"></SCRIPT>
 
<script type="text/javascript">
_uacct = "UA-162157-1";
urchinTracker();
</script>
</body>
</html>