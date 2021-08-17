<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="shortcut icon" href="./img/logo.png">
  <!--Link de Iconos-->
  <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
	<title>TABLA DE COTIZACIONES</title>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="panel.php">
    <img src="./img/tuercablanca.png" width="30" height="30" class="d-inline-block align-top" alt="">
    TRADING TRACING | OPERACIONES | VER COTIZACIONES
  </a>
 
   

  <ul class="nav">
 
  
  <li class="nav-item">
    <a class="nav-link " href="cotizaciones.php" tabindex="-1" aria-disabled="true">Volver</a>
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
</video><br><br><br>
<div class="container">
<table class="table table-striped table-dark table-responsive">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Origen-Destino</th>
      <th scope="col">Contenedor</th>
      <th scope="col">Fecha</th>
      <th scope="col">Precio Tracing</th>
      <th scope="col">Km Tracing</th>
      <th scope="col">Ptracing + km</th>
      <th scope="col">Sobrepeso tracing</th>
      <th scope="col">Precio proveedor</th>
      <th scope="col">Km proveedor</th>
      <th scope="col">Pproveedor + km</th>
      <th scope="col">Sobrepeso proveedor</th>
      <th scope="col">Valor pista</th>
      <th scope="col">Pista * 10%</th>
      <th scope="col">Pista + porcentaje</th>
      <th scope="col">SPP</th>
      <th scope="col">Ptrac + SPP</th>
      <th scope="col">Prov + Sobre + Vp</th>
      <th scope="col">Ganancia</th>
      <th scope="col" colspan="3" style="text-align: center;">A C T I O N S</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	include("conexion.php");
	$query="SELECT * FROM cotizacion";
	$resultado = $cn->query($query);
	foreach($resultado as $res){
  	 ?>
    <tr> 
      <td><?php echo $res['id']; ?></td>
      <td><?php echo $res['origendestino']; ?></td>
      <td><?php echo $res['contenedor']; ?></td>
      <td><?php echo $res['fecha']; ?></td>
      <td><?php echo $res['ptracing']; ?></td>
      <td><?php echo $res['km']; ?></td>
      <td><?php echo $res['ptracingkm']; ?></td>
      <td><?php echo $res['sobrepeso']; ?></td>
      <td><?php echo $res['pproveedor']; ?></td>
      <td><?php echo $res['pkm']; ?></td>
      <td><?php echo $res['pproveedorkm']; ?></td>
      <td><?php echo $res['psobrepeso']; ?></td>
      <td><?php echo $res['vpista']; ?></td>
      <td><?php echo $res['vpistaporcentaje']; ?></td>
      <td><?php echo $res['pistaporcentaje']; ?></td>
      <td><?php echo $res['spp']; ?></td>
      <td><?php echo $res['ptracspp']; ?></td>
      <td><?php echo $res['provsobrevp']; ?></td>
      <td><?php echo $res['ganancia']; ?></td>
      <td><a class="btn btn-warning" href="editarcotizacion.php?id=<?php echo $res['id']; ?>">
  <i class="fa fa-pencil-square-o fa-lg"></i></a></td>
      <td><a class="btn btn-success" href="pdfcotizacion.php?id=<?php echo $res['id']; ?>">
  <i class="fa fa-file-pdf-o fa-lg"></i></a></td>
      <td><a data-toggle="modal" data-target="#exampleModal" class="btn btn-danger">
  <i class="fa fa-trash-o fa-lg"></i></a></td>




    </tr>

    <?php
		}
	?>
  </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminación de tarja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Estás seguro de eliminar la cotización?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <a href="eliminarcotizacion.php?id=<?php echo $res['id']; ?>" class="btn btn-danger">SI</a>
      </div>
    </div>
  </div>
</div>






<!--Scrip Bootstrap 4-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>	
</body>
</html>