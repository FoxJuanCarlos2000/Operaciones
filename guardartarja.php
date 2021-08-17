<?php 

include ("conexion.php");

$folio = $_POST['folio'];
$aduana = $_POST['aduana'];
$Ncontenedor = $_POST['Ncontenedor'];
$selloI = $_POST['selloI'];
$Npedimento = $_POST['Npedimento'];
$Pdeclarado = $_POST['Pdeclarado'];
$Nmercancias = $_POST['Nmercancias'];
$fecha = $_POST['fecha'];
$Nbultos = $_POST['Nbultos'];
$selloF = $_POST['selloF'];
$contener = $_POST['contener'];
$buque = $_POST['buque'];
$Tmercancias = $_POST['Tmercancias'];
$consolidacion = $_POST['consolidacion'];
$carga = $_POST['carga'];
$traspaleo = $_POST['traspaleo'];
$conteo = $_POST['conteo'];
$etiquetado = $_POST['etiquetado'];
$desconsolidacion = $_POST['desconsolidacion'];
$descarga = $_POST['descarga'];
$revision = $_POST['revision'];
$Pconsolidado = $_POST['Pconsolidado'];
$Lmaniobra = $_POST['Lmaniobra'];
$Hinicio = $_POST['Hinicio'];
$Hterminacion = $_POST['Hterminacion'];
$observacion = $_POST['observacion'];
$supervisor = $_POST['supervisor'];
$operador = $_POST['operador'];

$query = "INSERT INTO tarja(folio, aduana, Ncontenedor, selloI, Npedimento, Pdeclarado, Nmercancias, fecha, Nbultos, selloF, contener, buque, Tmercancias, consolidacion, carga, traspaleo, conteo, etiquetado, desconsolidacion, descarga, revision, Pconsolidado, Lmaniobra, Hinicio, Hterminacion, observacion, supervisor, operador) VALUES('$folio','$aduana','$Ncontenedor','$selloI','$Npedimento','$Pdeclarado','$Nmercancias', '$fecha','$Nbultos','$selloF','$contener','$buque', '$Tmercancias','$consolidacion', '$carga','$traspaleo','$conteo','$etiquetado','$desconsolidacion','$descarga','$revision','$Pconsolidado','$Lmaniobra','$Hinicio','$Hterminacion','$observacion', '$supervisor', '$operador')";

$res=mysqli_query($cn,$query);
		if($res){
			echo '<script type="text/javascript">alert("Agregado correctamente"); window.location="tarja.php";</script>';
		}else{
			die("Error".mysql_error($cn));
		}








 ?>