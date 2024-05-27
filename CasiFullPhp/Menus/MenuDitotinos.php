<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery App </title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/styles.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="Menu.php">Delivery App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="Menu.php">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contactos</a>
            </li>
          </ul>
      <a class="btn btn-outline-light my-2 my-sm-0" href="login.html">Inicio de sesión</a>
    </div>
    </nav>


    <br>
    <div class="container text-center">
        <div class="row align-items-start">
          <div class="col">
            <div class="card" style="width: 16rem;">
                <img src="../IMG/HAMBURGUESA.jpg" class="card-img-top" width="100">
                <div class="card-body">
                  <h5 class="card-title">Hamburguesa</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="../CarritoRestaurant.html" class="btn btn-primary">Entrar</a>
                    </div>
                </div>
            </div>
          <div class="col">
            <div class="card" style="width: 16rem;">
                <img src="../IMG/HOTDOG.jpg" class="card-img-top" width="100">
                <div class="card-body">
                  <h5 class="card-title">Hot Dog</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="../CarritoRestaurant.html" class="btn btn-primary">Entrar</a>
                </div>
              </div>
            </div>
          <div class="col">
            <div class="card" style="width: 16rem;">
                <img src="../IMG/PAPAS.jpg" class="card-img-top" width="100">
                <div class="card-body">
                  <h5 class="card-title">Papas Fritas</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="../CarritoRestaurant.html" class="btn btn-primary">Entrar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>


      <div class="container text-center">
        <div class="row align-items-start">
          <div class="col">
            <div class="card" style="width: 16rem;">
                <img src="../IMG/Coca.jpg" class="card-img-top" width="100">
                <div class="card-body">
                  <h5 class="card-title">Coca Cola</h5>
                  <a href="../CarritoRestaurant.html" class="btn btn-primary">Entrar</a>
                    </div>
                </div>
            </div>
          <div class="col">
            <div class="card" style="width: 16rem;">
                <img src="../IMG/Sprite.jpg" class="card-img-top" width="100">
                <div class="card-body">
                  <h5 class="card-title">Sprite</h5>
                  <a href="../CarritoRestaurant.html" class="btn btn-primary">Entrar</a>
                </div>
              </div>
            </div>
          <div class="col">
            <div class="card" style="width: 16rem;">
                <img src="../IMG/Fanta.jpg" class="card-img-top" width="100">
                <div class="card-body">
                  <h5 class="card-title">Fanta</h5>
                  <a href="../CarritoRestaurant.html" class="btn btn-primary">Entrar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php require("../Pie.php"); ?>







    <!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>