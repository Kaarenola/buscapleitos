<?php
  require('conexion.php');
  
  $query="SELECT *  FROM tabla_productos";

  $resultado=$mysqli->query($query);
  
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Buscapleitos</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/freelancer.css" rel="stylesheet">

  </head>
  <body>

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a href="index.html"><img src="img/logobusca.png"></a> 
            </div>

            <!-- MENU -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="historia.html">Historia</a>
                    </li>
                    <li class="page-scroll">
                        <a href="productos.html">Productos</a>
                    </li>
                    <li class="page-scroll">
                        <a href="momentos.html">Momentos</a>
                    </li>
                    <li class="page-scroll">
                        <a href="contactanos.html">Contactanos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   <?php while($row=$resultado->fetch_assoc()){ ?>
                      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                      <a href="productos.php?id=<?php echo $row['id_prod'];?>">
                        <div class="thumbnail">
                          <img src="img/<?php echo $row['imagen'];?>">
                        </div>
                      </a>
                      </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>

    <h1></h1>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/freelancer.js"></script>
  </body>
</html>