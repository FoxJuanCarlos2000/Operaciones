<?php 
  include ("conexion.php");
  $sql="SELECT * FROM imagen ORDER BY id desc limit 4";
  $res=mysqli_query($cn,$sql);
 ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="shortcut icon" href="./img/logo.png">
	
	<title>Operaciones</title>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="panel.php">
    <img src="./img/tuercablanca.png" width="30" height="30" class="d-inline-block align-top" alt="">
    TRADING TRACING | OPERACIONES | EIR
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
<br><br>
	<div class="container" style="background-color: white;">

<div class="card-group">
  <div class="card">
    <div class="card-body">
          <img src="./img/logo2.png" style="width: 300px; height: 200px; max-width: 100%;">
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <center><h5 class="card-title">TRACING LOGISTICS MANZANILLO</h5></center>
    <center><p class="card-text">RECIBO DE INTERCAMBIO DE EQUIPO</p></center>
    </div>
  </div>

<form action="guardareir.php" method="POST">
  


  <div class="card">
    <a href="vereir.php" class="btn btn-success">Ver EIR's</a>
    <div class="card-body">
      <center><h5 class="card-title" style="color: red;">FOLIO</h5></center>
      <hr>
      <div class="input-group mb-3">
  <div class="input-group-prepend">
  </div>
  <input type="text" class="form-control" placeholder="Ingrese el folio" required name="folio">
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
   <span class="input-group-text" id="inputGroup-sizing-default">CONTENEDOR: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Especificar Contenedor" id="" name="contenedor">
 </div>

</div>
</div>

<div class="col-sm-6">
  <div class="card-body">

  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">FECHA: </span>
 </div>
  <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  id="" name="fecha">
 </div>

</div>
</div>


<div class="col-sm-3">
  <div class="card-body">

  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">EMBALAJE: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  id="" name="embalaje">
 </div>
</div>
</div>

<div class="col-sm-3">
  <div class="card-body">

  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">TIPO: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  id="" name="tipo">
 </div>
</div>
</div>

<div class="col-sm-3">
  <div class="card-body">

  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">DAÑADO: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  id="" name="danado">
 </div>
</div>
</div>

<div class="col-sm-3">
  <div class="card-body">

  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">LINEA NAVIERA: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  id="" name="naviera">
 </div>
</div>
</div>




<div class="col-sm-3">
  <div class="card-body">

  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">TRANSPORTE: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  id="" name="transporte">
 </div>
</div>
</div>

<div class="col-sm-3">
  <div class="card-body">

  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">PLACAS: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  id="" name="placas">
 </div>
</div>
</div>

<div class="col-sm-3">
  <div class="card-body">

  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">ORIGEN/DESTINO: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  id="" name="origenDestino">
 </div>
</div>
</div>

<div class="col-sm-3">
  <div class="card-body">

  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">SELLO: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  id="" name="sello">
 </div>
</div>
</div>

<div class="card">
    <div class="card-body">
          <img src="./img/contenedorformato.png" style="width: 1050px; height: 600px; max-width: 100%;" >
    </div>
  </div>


</div>

<div class="row">
  <div class="col-sm-4">
  <div class="card">
    <div class="card-body">
      <center><h5 class="card-title">LIMPIEZA</h5></center>
      <hr>
      <div class="form-group">
      <select id="inputState" class="form-control" name="limpieza">
        <option selected>Selecciona una opción</option>
        <option value='Normal'>NORMAL</option>
        <option value='Especial'>ESPECIAL</option>
        <option value='Barrido'>BARRIDO</option>
      </select>
    </div>
</div>
  </div>
</div>

<div class="col-sm-8">
  <div class="card-body">

  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">OBSERVACIONES ENTRADA: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  id="" name="Oentrada">
 </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text" id="inputGroup-sizing-default">OBSERVACIONES SALIDA: </span>
 </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  id="" name="Osalida">
 </div>
 </div>

</div>
 </div>

</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <center><h5 class="card-title">TRANSPORTISTA</h5></center>
        <hr>
        <p class="card-text">El equipo fue entregado en las condiciones de acuerdo a lo detallado en el presente.</p>
            <div class="input-group mb-3">
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Ingrese nombre del transportista." name="transportista">
            </div>
        <center><p>NOMBRE / FIRMA </p></center>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <center><h5 class="card-title">DEPOSITO</h5></center>
        <hr>
        <p class="card-text">El equipo fue entregado en las condiciones de acuerdo a lo detallado en el presente.</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Ingrese nombre del deposito." name="deposito">
        </div>
        <center><p>NOMBRE / FIRMA </p></center>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-body">
    <p style="text-align: justify;">CERTIFICO QUE EL EQUIPO MENCIONADO FUE INSPECCIONADO SEGÚN SE MENCIONA Y QUE LOS RESUSTADOS DE DICHA INSPECCIÓN SON VERDADEROS, LA PARTE QUE RECIBE ACEPTA LA RESPONSABILIDAD, EL CUIDADO Y CONTROL DE DICHO EQUIPO DEBIENDOLO ENTREGAR EN LAS MISMAS CONDICIONES, SALVO EL BUEN USO Y DESGASTE NORMAL RECONOCIENDO SU RESPONSABILIDAD POR CUALQUIER DAÑO Y/O PERDIDA OCASIONADA, COMPROMETIENDOSE A REEMBOLSAR EN SU TOTALIDAD EL MONTO EN CUESTIÓN.</p>
  </div>
</div>

<input type="submit" value="Agregar" class="btn btn-primary btn-lg btn-block">
</form>






</div>





































<!--    
<div class="card">
<div class="card-group">
<div class="col-sm-6">
  <div class="card-body">
    
  	<div class="input-group mb-3">
  <div class="input-group-prepend">
    	<span class="input-group-text" id="inputGroup-sizing-default">Placa: </span>
 </div>
  		<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Específica el número de placa de la unidad." id="" name="">
 </div>

 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <label><input type="radio" aria-label="Radio button for following text input" name="monitoreo"> Carga Suelta: </label>
    </div>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Específica el cubicaje. de la unidad." id="" name="">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <label><input type="radio" aria-label="Radio button for following text input" name="monitoreo"> Contenedor: </label>
    </div>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Selecciona una opción...</option>
    <option value="1">FULL</option>
    <option value="2">SENCILLO</option>
 
  </select>
</div>

 


  </div>
</div>
<div class="col-sm-6">
  <div class="card-body">

    <div class="input-group mb-3">
  <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Operador: </span>
 </div>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Nombre completo del operador." id="" name="">
 </div>

 <div class="input-group mb-3">
  <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Telefóno: </span>
 </div>
      <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Número telefonico del operador." id="" name="">
 </div>

 <div class="input-group mb-3">
  <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Link: </span>
 </div>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Link de rastreo" id="" name="">
 </div>
    
  </div>
</div>
</div>

  <div class="container">
<h1>Fotos de la carga</h1>
  <form action="guardarimagen.php" method="POST" enctype="multipart/form-data">  
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hola Estimado Usuario!</strong> Se le sugiere agregar solo 4 imagenes previas de la carga :).
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&otimes;</span>
  </button>
</div> 
  Nombre <input type="file" name="img" ><br><br>
  <input type="submit" value="S U B I R" class="btn btn-success btn-lg btn-block">
</form>
<br>
<?php 
while($data=mysqli_fetch_array($res))
{
  echo '
    <img id="iii" src="'.$data['ruta'].'" width="266px" height="220px" class="imagen">
  ';
} 
?>
</div><br>

</div>
<br><br>
-->

  
</div>

<!--Scrip Bootstrap 4-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>		
</body>
</html>