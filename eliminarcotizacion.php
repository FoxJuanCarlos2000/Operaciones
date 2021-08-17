<?php 

include("conexion.php");
$id = $_REQUEST['id'];


$query="DELETE FROM cotizacion WHERE id = '$id'";

$resultado=mysqli_query($cn,$query);
		if($resultado){
			echo '<script type="text/javascript">alert("Eliminado correctamente"); window.location="vercotizaciones.php";</script>';
		}else{
			die("Error".mysql_error($cn));
		}






 ?>