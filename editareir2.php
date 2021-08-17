<?php 


include("conexion.php");
	$id = $_REQUEST['id'];
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



	$query = "UPDATE eir SET folio='$folio', contenedor='$contenedor', fecha='$fecha', embalaje='$embalaje', tipo='$tipo', danado='$danado', naviera='$naviera', transporte='$transporte', placas='$placas', origenDestino='$origenDestino', sello='$sello', limpieza='$limpieza', Oentrada='$Oentrada', Osalida='$Osalida', transportista='$transportista', deposito='$deposito' WHERE id='$id' ";




	$resultado = mysqli_query($cn, $query);

	if($resultado){
			echo '<script type="text/javascript">alert("Editado correctamente"); window.location="vereir.php";</script>';
		}else{
			die("Error".mysql_error($cn));
		}


 ?>