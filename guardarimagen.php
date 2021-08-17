<?php 
include("conexion.php");

if(isset($_FILES['img'])){
	$nombreimg=$_FILES['img']['name'];
	$ruta=$_FILES['img']['tmp_name'];
	$destino="imagenes/".$nombreimg;
	if(copy($ruta,$destino)){
		$sql="INSERT INTO imagen(nombre,ruta) VALUES('$nombreimg','$destino')";
		$res=mysqli_query($cn,$sql);
		if($res){
			echo '<script type="text/javascript">alert("Agregado correctamente"); window.location="monitoreo.php";</script>';
		}else{
			die("Error".mysql_error($cn));
		}
	}
}

 ?>