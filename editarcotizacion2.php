<?php 

include ("conexion.php");
	$id = $_REQUEST['id'];
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




	$query = "UPDATE cotizacion SET origendestino='$origendestino', contenedor='$contenedor', fecha='$fecha', ptracing='$ptracing', km='$km', ptracingkm='$ptracingkm', sobrepeso='$sobrepeso', pproveedor='$pproveedor', pkm='$pkm', pproveedorkm='$pproveedorkm', psobrepeso='$psobrepeso', vpista='$vpista', vpistaporcentaje='$vpistaporcentaje', pistaporcentaje='$pistaporcentaje', spp='$spp', ptracspp='$ptracspp', provsobrevp='$provsobrevp', ganancia='$ganacia' WHERE id = '$id'";

	$resultado = mysqli_query($cn, $query);

	if($resultado){
			echo '<script type="text/javascript">alert("Editado correctamente"); window.location="vercotizaciones.php";</script>';
		}else{
			die("Error".mysql_error($cn));
		}


 ?>