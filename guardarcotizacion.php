<?php 

	include ("conexion.php");

	$origendestino = $_POST['origendestino'];
	$contenedor = $_POST['contenedor'];
	$fecha = $_POST['fecha'];
	$ptracing = $_POST['ptracing'];
	$km = $_POST['km'];
	$ptracingkm = $_POST['ptracingkm'];
	$sobrepeso = $_POST['sobrepeso'];
	$pproveedor = $_POST['pproveedor'];
	$pkm = $_POST['pkm'];
	$pproveedorkm = $_POST['pproveedorkm'];
	$psobrepeso = $_POST['psobrepeso'];
	$vpista = $_POST['vpista'];
	$vpistaporcentaje = $_POST['vpistaporcentaje'];
	$pistaporcentaje = $_POST['pistaporcentaje'];
	$spp = $_POST['spp'];
	$ptracspp = $_POST['ptracspp'];
	$provsobrevp = $_POST['provsobrevp'];
	$ganancia = $_POST['ganancia'];


	$query = "INSERT INTO cotizacion(origendestino, contenedor, fecha, ptracing, km, ptracingkm, sobrepeso, pproveedor, pkm, pproveedorkm, psobrepeso, vpista, vpistaporcentaje, pistaporcentaje, spp, ptracspp, provsobrevp, ganancia) VALUES('$origendestino','$contenedor', '$fecha', '$ptracing', '$km', '$ptracingkm', '$sobrepeso', '$pproveedor', '$pkm', '$pproveedorkm', '$psobrepeso', '$vpista', '$vpistaporcentaje', '$pistaporcentaje', '$spp', '$ptracspp', '$provsobrevp','$ganancia')";

	$res=mysqli_query($cn,$query);
		if($res){
			echo '<script type="text/javascript">alert("Cotización agregada correctamente"); window.location="cotizaciones.php";</script>';
		}else{
			die("Error".mysql_error($cn));
		} 



 ?>