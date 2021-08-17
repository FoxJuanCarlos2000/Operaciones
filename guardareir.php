<?php 
 

 include ("conexion.php");


$folio = $_POST['folio'];
$contenedor = $_POST['contenedor'];
$fecha = $_POST['fecha'];
$embalaje = $_POST['embalaje'];
$tipo = $_POST['tipo'];
$danado = $_POST['danado'];
$naviera = $_POST['naviera'];
$transporte = $_POST['transporte'];
$placas = $_POST['placas'];
$origenDestino = $_POST['origenDestino'];
$sello = $_POST['sello'];
$limpieza = $_POST['limpieza'];
$Oentrada = $_POST['Oentrada'];
$Osalida = $_POST['Osalida'];
$transportista = $_POST['transportista'];
$deposito = $_POST['deposito'];


$query = "INSERT INTO eir(folio, contenedor, fecha, embalaje, tipo, danado, naviera, transporte, placas, origenDestino, sello, limpieza, Oentrada, Osalida, transportista, deposito) VALUES('$folio', '$contenedor', '$fecha', '$embalaje', '$tipo', '$danado', '$naviera', '$transporte', '$placas', '$origenDestino', '$sello', '$limpieza', '$Oentrada', '$Osalida', '$transportista', '$deposito')";


$res=mysqli_query($cn,$query);
		if($res){
			echo '<script type="text/javascript">alert("Agregado correctamente"); window.location="eir.php";</script>';
		}else{
			die("Error".mysql_error($cn));
		}







 ?>