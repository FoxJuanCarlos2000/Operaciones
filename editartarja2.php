<?php 

	include("conexion.php");
	$id = $_REQUEST['id'];
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




	$query = "UPDATE tarja SET folio='$folio', aduana='$aduana', Ncontenedor='$Ncontenedor', selloI='$selloI', Npedimento='$Npedimento', Pdeclarado='$Pdeclarado', Nmercancias='$Nmercancias', fecha='$fecha', Nbultos='$Nbultos', selloF='$selloF', contener='$contener', buque='$buque', Tmercancias='$Tmercancias', consolidacion='$consolidacion', carga='$carga', traspaleo='$traspaleo', conteo='$conteo', etiquetado='$etiquetado', desconsolidacion='$desconsolidacion', descarga='$descarga', revision='$revision', Pconsolidado='$Pconsolidado', Lmaniobra='$Lmaniobra', Hinicio='$Hinicio', Hterminacion='$Hterminacion', observacion='$observacion', supervisor='$supervisor', operador='$operador' WHERE id = '$id' ";

	$resultado = mysqli_query($cn, $query);

	if($resultado){
			echo '<script type="text/javascript">alert("Editado correctamente"); window.location="vertarjas.php";</script>';
		}else{
			die("Error".mysql_error($cn));
		}



 ?>