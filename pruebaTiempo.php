<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba Tiempo</title>
    <!--Mediante la siguiente función en javaScript, 
    se le pasan varios parametros sobre el tiempo, y se actualizan. -->
<script type="text/javascript">
    
	function HoraActual(hora, minuto, segundo){
		segundo = segundo + 1;
		if(segundo == 60) {
			minuto = minuto + 1;
			segundo = 0;
			if(minuto == 60) {
				minuto = 0;
				hora = hora + 1;
				if(hora == 24) {
					hora = 0;
				}
			}
		}
        //enviamos los datos a un id en concreto.
		HoraCompleta= hora + "  :  " + minuto + "  :  " + segundo;
		document.getElementById('contenedor_reloj').innerHTML = HoraCompleta;
		setTimeout("HoraActual("+hora+", "+minuto+", "+segundo+")", 1000);
	} 
	</script>  
</head>

<body onload="HoraActual(<?php echo date("H").", ".date("i").", ".date("s"); ?>)">
<div id="contenedor_reloj"></div> 
<br>
<?php echo date("d")."/".date("m")."/".date("Y");?>
</body> 
</html>


