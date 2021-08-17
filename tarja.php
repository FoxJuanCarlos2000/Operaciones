<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="shortcut icon" href="./img/logo.png">
	<title>FORM TARJA</title>

    <!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="panel.php">
    <img src="./img/tuercablanca.png" width="30" height="30" class="d-inline-block align-top" alt="">
    TRADING TRACING | OPERACIONES | FORMULARIO TARJA
  </a>
 
   

  <ul class="nav">
 
  
  <li class="nav-item">
    <a class="nav-link " href="index.php" tabindex="-1" aria-disabled="true">Volver</a>
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
  <br><br><br>
  <form method="POST" action="guardartarja.php">
<div class="container"><br>
<div class="card-group">
  <div class="card">
    <div class="card-body">
      		<img src="./img/logo2.png" style="width: 300px; height: 200px; max-width: 100%;">
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <center><h5 class="card-title">TRACING LOGISTICS</h5></center>
    <center><p class="card-text">R.F.C HESJ780510NP7</p></center>
    <center><p class="card-text">Calle Olivo #172, Rosa Morada, Salahua Manzanillo C.P 28869</p></center>
    <center><p class="card-text">Tel: 333-1402</p></center>
    </div>
  </div>
  <div class="card">
    <a href="vertarjas.php" class="btn btn-success">Ver tarjas</a>
    <div class="card-body">
      <center><h5 class="card-title" style="color: red;">Folio</h5></center>
      <hr>
      <div class="input-group mb-3">
  <div class="input-group-prepend">
  </div>
  <input type="text" class="form-control" placeholder="Ingrese el folio de tarja" required name="folio">
</div>
</div>
  </div>
</div>
<center><h1 style="color: white;">T A R J A</h1></center>

<div class="card">
<div class="card-group">
<div class="col-sm-6">
  <div class="card-body">
    
  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">Agencia Aduanal: </span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nombre de la Agencia Aduanal" id="" name="aduana">
  </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">No. de Contenedor: </span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Número de Contenedor" id="" name="Ncontenedor">
  </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">No. Sello(inicial): </span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Número de sello inicial" id="" name="selloI">
  </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">Pedimento: </span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Número de Pedimento" id="" name="Npedimento">
  </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">Peso Declarado: </span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Especifica el Peso" id="" name="Pdeclarado">
  </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">No. Mercancías: </span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Especifica el número de mercancías" id="" name="Nmercancias">
  </div>

</div>
</div>

<div class="col-sm-6">
  <div class="card-body">

  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">Fecha: </span>
 </div>
  <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  id="" name="fecha">
 </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">No. Bultos: </span>
 </div>
 <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Número de bultos." id="" name="Nbultos">
 </div>

 <div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="inputGroup-sizing-default">No. Sello(final): </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Número de sello final" id="" name="selloF">
 </div>

 <div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="inputGroup-sizing-default">Dice Contener: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Especifica contener" id="" name="contener">
 </div>

 <div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="inputGroup-sizing-default">Buque: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Especificar Buque" id="" name="buque">
 </div>

 <div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="inputGroup-sizing-default">Tipo Mercancías: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Especificar el tipo de mercancía" id="" name="Tmercancias">
 </div>
    
 </div>
</div>
</div>

<div class="card">
<div class="card-group">
<div class="col-sm-6">
<div class="card-body">

	 <div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="inputGroup-sizing-default">Consolidación: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Especificar Consolidación" id="" name="consolidacion">
 </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="inputGroup-sizing-default">Carga: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Si es carga" id="" name="carga">
 </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="inputGroup-sizing-default">Traspaleo: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Si es Traspaleo" id="" name="traspaleo">
 </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="inputGroup-sizing-default">Conteo: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Especificar el Conteo" id="" name="conteo">
 </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="inputGroup-sizing-default">Etiquetado: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Si es Etiquetado" id="" name="etiquetado">
 </div>


</div>
</div>

<div class="col-sm-6">
  <div class="card-body">

  	 <div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="inputGroup-sizing-default">Desconsolidación: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Especificar Buque" id="" name="desconsolidacion">
 </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="inputGroup-sizing-default">Descarga: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Si es Descarga" id="" name="descarga">
 </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="inputGroup-sizing-default">Revisión Previa: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Si hubo Revisión Previa" id="" name="revision">
 </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="inputGroup-sizing-default">Pedimento Consolidado: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Ingresa Número de Pedimento" id="" name="Pconsolidado">
 </div>

 	 <div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="inputGroup-sizing-default">Lugar de Maniobra: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Especificar lugar de Maniobra" id="" name="Lmaniobra">
 </div>

  </div>
</div>

</div>
</div>

	

</div>

<div class="card">
<div class="card-group">
<div class="col-sm-6">
<div class="card-body">

	 <div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="inputGroup-sizing-default">Hora de Inicio: </span>
 </div>
  <input type="time" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="" name="Hinicio">
 </div>


</div>
</div>

<div class="col-sm-6">
  <div class="card-body">
  	<div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="inputGroup-sizing-default">Hora de Terminación: </span>
 </div>
  <input type="time" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="" name="Hterminacion">
 </div>

  </div>
</div>

</div>
</div>

<div class="card">
<div class="card-group">
<div class="card-body">
<center><h5 class="card-title">OBSERVACIONES</h5></center>
	<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Ingresa aqui tus observaciones por favor." id="" name="observacion">
</div>
</div>
</div>

<div class="card">
<div class="card-group">
<div class="col-sm-6">
<div class="card-body">

	 <div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="inputGroup-sizing-default">Supervisor: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="" name="supervisor" placeholder="Ingresa el nombre del supervisor">
 </div>


</div>
</div>

<div class="col-sm-6">
  <div class="card-body">
  	<div class="input-group mb-3">
  <div class="input-group-prepend">
   <span class="input-group-text" id="inputGroup-sizing-default">Operador: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="" name="operador" placeholder="Ingresa nombre del operador">
 </div>

  </div>
</div>

</div>
</div>

<input type="submit" value="Guardar" class="btn btn-primary btn-lg btn-block">

</div>
</form>

<br><br><br>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>	
</body>
</html>