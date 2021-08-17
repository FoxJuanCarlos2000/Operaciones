<?php 

include 'conexion.php';

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="img/logos/tuercatracing.png">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">

  <title>PANEL - Trading Tracing</title>
  
  <!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">
    <img src="img/logos/tuercablanca.png" width="30" height="30" class="d-inline-block align-top" alt="">
    TRADING TRACING
  </a>
  <ul class="nav">
 
  
  <li class="nav-item">
    <a class="nav-link disabled" href="panel.php" tabindex="-1" aria-disabled="true">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="personas.php">Salir</a>
  </li>
</ul>
</nav>
<!-- FIN NAVBAR -->


</head>
<body>



<!-- S E R V I C I O S -->
<section class="page-section bgSer" id="servicios">
    <div class="container">
     
      <div class="row">


        <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="hovereffect" style="margin-bottom:40px;">
 
             <div class="portfolio-hover ">
               <div class="portfolio-hover-content">
               </div>
             </div>
             <img class="img-fluid" src="img/departamentos/1.png" alt="">
             <div class="overlay">
              
                 <a class="info" href="contabilidad.php">ENTRAR</a> 
              </div>
           </a>
           <div class="portfolio-caption">
             <h4></h4>
           </div>
           </div>
         </div>  

         <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="hovereffect">
         
             <div class="portfolio-hover ">
               <div class="portfolio-hover-content">
               </div>
             </div>
             <img class="img-fluid" src="img/departamentos/2.png" alt="">
             <div class="overlay">
          
                 <a class="info" data-toggle="modal" href="#portfolioModal2">ENTRAR</a> 
              </div>
           </a>
           <div class="portfolio-caption">
             <h4></h4>
           </div>
           </div>
         </div>  

         <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="hovereffect">
          
             <div class="portfolio-hover ">
               <div class="portfolio-hover-content">
               </div>
             </div>
             <img class="img-fluid" src="img/departamentos/3.png" alt="">
             <div class="overlay">
        
                 <a class="info" data-toggle="modal" href="#portfolioModal3">ENTRAR</a> 
              </div>
           </a>
           <div class="portfolio-caption">
             <h4></h4>
           </div>
           </div>
         </div>  

         <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="hovereffect">
         
             <div class="portfolio-hover ">
               <div class="portfolio-hover-content">
               </div>
             </div>
             <img class="img-fluid" src="img/departamentos/4.png" alt="">
             <div class="overlay">
 
                 <a class="info" data-toggle="modal" href="#portfolioModal4">ENTRAR</a> 
              </div>
           </a>
           <div class="portfolio-caption">
             <h4></h4>
           </div>
           </div>
         </div>  

         <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="hovereffect">
          
             <div class="portfolio-hover ">
               <div class="portfolio-hover-content">
               </div>
             </div>
             <img class="img-fluid" src="img/departamentos/5.png" alt="">
             <div class="overlay">
            
                 <a class="info"  href="recursos-humanos.php">ENTRAR</a> 
              </div>
           </a>
           <div class="portfolio-caption">
             <h4></h4>
           </div>
           </div>
         </div>  

         <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="hovereffect">
     
             <div class="portfolio-hover ">
               <div class="portfolio-hover-content">
               </div>
             </div>
             <img class="img-fluid" src="img/departamentos/6.png" alt="">
             <div class="overlay">
         
                 <a class="info" data-toggle="modal" href="#portfolioModal7">ENTRAR</a> 
              </div>
           </a>
           <div class="portfolio-caption">
             <h4></h4>
           </div>
           </div>
         </div>  

       

        
       

      

      </div>
    </div>

 
  </section>



</body>
</html>