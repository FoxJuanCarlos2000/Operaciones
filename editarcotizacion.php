<!DOCTYPE html>
<html>
<head>
	<title>EDITAR COTIZACIÓN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="shortcut icon" href="./img/logo.png">

  <!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="panel.php">
    <img src="./img/tuercablanca.png" width="30" height="30" class="d-inline-block align-top" alt="">
    TRADING TRACING | OPERACIONES | EDITAR COTIZACIÓN
  </a>
 
   

  <ul class="nav">
 
  
  <li class="nav-item">
    <a class="nav-link " href="vercotizaciones.php" tabindex="-1" aria-disabled="true">Volver</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Salir</a>
  </li>
</ul>
</nav>
<!-- FIN NAVBAR -->

</head>
<body>
<video class="vide" loop="true" muted autoplay>
<source src="./videos/Network.mp4" type="video/mp4"></source>
</video>
<br><br>
<?php 
  $id=$_REQUEST['id'];
  include("conexion.php");
  $query = "SELECT * FROM cotizacion WHERE id = '$id'";
  $resultado = mysqli_query($cn,$query);
  $res = $resultado->fetch_assoc();
 ?>
<div class="container" style="color: white;">
<form action="editarcotizacion2.php?id=<?php echo $res['id']; ?>" method="POST">
<table class="table table-responsive" style="color: white;">

	<input type="text" class="form-control" placeholder="Ingresa: Origen-Destino: Codigo Postal"  aria-describedby="addon-wrapping" name="origendestino" required value="<?php echo $res['origendestino']; ?>">
	<input type="text" class="form-control" placeholder="Ingresa: Sencillo/Full (# Ejes)" aria-describedby="addon-wrapping" required name="contenedor" value="<?php echo $res['contenedor']; ?>">
  <input type="date" class="form-control" aria-describedby="addon-wrapping" required name="fecha" value="<?php echo $res['fecha']; ?>"><br>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hola Estimado Usuario!</strong> No dejes casillas en vacio, mejor agrega un "0". Si no el programa no te deja avanzar!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&otimes;</span>
  </button>
</div>
  <thead class="thead-dark">
    <tr>
      <th scope="col">P. TRACING</th>
      <th scope="col">KM</th>
      <th scope="col">$/KM</th>
      <th scope="col">SOBREPESO</th>
      <th scope="col">P. PROVEEDOR</th>
      <th scope="col">KM</th>
      <th scope="col">$/KM</th>
      <th scope="col">SOBREPESO</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="ptracing" required onkeypress="return checkIt(event)" placeholder="Precio Tracing" name="ptracing" value="<?php echo $res['ptracing']; ?>"></td>
      <td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="tkm" placeholder="Total KM" required onkeypress="return checkIt(event)" name="km" value="<?php echo $res['km']; ?>"><input type="button" onclick="ll();" class="btn-success" value="Calcular"></td>
      <td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="result" placeholder="P. Tracing/KM" name="ptracingkm" value="<?php echo $res['ptracingkm']; ?>"></td>
      <td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required onkeypress="return checkIt(event)" placeholder="Sobrepeso $" id="tsobrepeso" name="sobrepeso" value="<?php echo $res['sobrepeso']; ?>"></td>
      <td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required onkeypress="return checkIt(event)" placeholder="Precio Prov." id="pproveedor" name="pproveedor" value="<?php echo $res['pproveedor']; ?>"></td>
      <td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required onkeypress="return checkIt(event)" placeholder="Total KM" id="tkmP" name="pkm" value="<?php echo $res['pkm']; ?>"><input type="button" onclick="ll1();" class="btn-success" value="Calcular"></td>
      <td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="P. PROV/KM" required onkeypress="return checkIt(event)" id="result1" name="pproveedorkm" value="<?php echo $res['pproveedorkm']; ?>">
      	</td>
      <td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required onkeypress="return checkIt(event)" placeholder="Sobrepeso $" id="psobrepeso" name="psobrepeso" value="<?php echo $res['psobrepeso']; ?>"></td>
    </tr>
  </tbody>
    <thead class="thead-dark">
    <tr>
      <th scope="col">V. PISTA</th>
      <th scope="col">VP * 10%</th>
      <th scope="col">Pista + Porc</th>
      <th scope="col">S + PP</th>
      <th scope="col">Ptrac + SPP</th>
      <th scope="col">Prov+Sobre+Vp</th>
      <th scope="col">Ganancia</th>
      
    </tr>
  </thead>
  <tbody>
  	<tr>
  		<td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="vpista" required onkeypress="return checkIt(event)" placeholder="$ Pistas" name="vpista" value="<?php echo $res['vpista']; ?>"><input type="button" onclick="mm();" class="btn-success" value="Calcular"></td>
      <td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="porcentaje" placeholder="Porc de pista" required onkeypress="return checkIt(event)" name="vpistaporcentaje" value="<?php echo $res['vpistaporcentaje']; ?>"></td>
      <td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="porcentajePista" placeholder="Porc + pista" required onkeypress="return checkIt(event)" name="pistaporcentaje" value="<?php echo $res['pistaporcentaje']; ?>"></td>
      <td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required onkeypress="return checkIt(event)" placeholder="S+PP" id="sumatoria" name="spp" value="<?php echo $res['spp']; ?>"></td>
      <td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required onkeypress="return checkIt(event)" placeholder="SPP + Ptrac" id="sumatoria2" name="ptracspp" value="<?php echo $res['ptracspp']; ?>"></td>
      <td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required onkeypress="return checkIt(event)" placeholder="Pp+Vp+Ps" id="sumatoria3" name="provsobrevp" value="<?php echo $res['provsobrevp']; ?>"></td>
      <td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Ganancia" required onkeypress="return checkIt(event)" id="resta" name="ganancia" value="<?php echo $res['ganancia']; ?>">
      	</td>
  	</tr>
  </tbody>
</table>
<input type="submit" name="" class="btn btn-primary btn-lg btn-block" value="Guardar">
<br>
</form>
</div>


<!--Alguna Prueba
<div class="container" style="background-color: white;">
<form method="POST" oninput="resultado.value=parseInt(valor1.value)/parseInt(valor2.value)">
    <input type="number" id="valor1" value="0"> /
    <input type="number" id="valor2" value="0"> =
    <output name="resultado" for="valor1 valor2" style="background-color: white;"></output>
</form>
</div>
-->


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

<script>
function checkIt(evt){
		evt=(evt)? evt:window.event
			var charCode=(evt.which)? evt.which:evt.keyCode
			if(charCode >31 &&(charCode<48||charCode>57)){
				status="Este campo solo acepta numeros"
				return false
			}
			status=""
			return true
		}

	function ll(){
	var uno = document.getElementById('ptracing').value;
	var dos = document.getElementById('tkm').value;
	var res = uno/dos;
	result.value = res;
	}

	function ll1(){
	var uno1 = document.getElementById('pproveedor').value;
	var dos2 = document.getElementById('tkmP').value;
	var res = uno1/dos2;
	result1.value = res;
	}

	function mm(){
		var tres = document.getElementById('vpista').value;
		var cuatro = document.getElementById('tsobrepeso').value;
		var cinco = document.getElementById('ptracing').value;
		var siete = document.getElementById('pproveedor').value;
		var seis = document.getElementById('psobrepeso').value;
		var res = eval(tres * .10);
		var res2 = parseInt(tres) + parseInt(res);
		var res3 = parseInt(res2) + parseInt(cuatro);
		var res4 = parseInt(cinco) + parseInt(res3);
		var res5 = parseInt(seis) + parseInt(tres) + parseInt(siete);
		var res6 = parseInt(res4) - parseInt(res5);
		porcentaje.value = res;
		porcentajePista.value = res2;
		sumatoria.value = res3;
		sumatoria2.value = res4;
		sumatoria3.value = res5;
		resta.value = res6;


		
		//if(isNaN(parseFloat(document.getElementById('sumatoria')))){
		//	sumatoria.value = "0";}
	}
</script>

</html>