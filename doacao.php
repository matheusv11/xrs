<!doctype html>


<html lang="pt-br">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="main2.css">

    <title> Doação </title>

  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Doação</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse w-100 order-3 dual-collapse2" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <hr>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">Voltar ao projeto</a>
            </li>
            <li class="nav-item">
              <hr>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastro.php">Cadastro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <hr>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="doacao.php">Doação</a>
            </li>
          </ul>
        </div>
      </nav>

    </header>

  <main role="main" class="container fluid">

  <div class="img fluid banner">


  </div>

<form action="doar.php" method="GET">

  <div class="container fluid doacao">

    <p><br></p>

<h1>Valor doado:</h1>
    <h3><?php
    include("testesum.php");
    ?></h3><br>
    <label class="labelDoar"> Digite o valor desejado para doação:</label>


    <div class="input-group mb-3 inputDoar">

      <div class="input-group-prepend">
        <span class="input-group-text">$</span>
      </div>

      <input type="number" min="1" max="" class="form-control" aria-label="" name="valor" value="valorperson">

      <div class="input-group-append">
        <span class="input-group-text">.00</span>
      </div>

    </div>

    <br> <br>

    <button type="submit" class="btn btn-success">Doar</button>


    <p><br></p>

    </div>
    </div>



</form>
  </main>

  <!-- Footer -->
  <footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase links">XRS enterprise</h5>
          <p class="footerWhite">Inovação mais próxima de você!</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

          <!-- Links -->
          <h5 class="text-uppercase footerWhite">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a class="links" href="#!">Link 1</a>
            </li>
            <li>
              <a class="links" href="#!">Link 2</a>
            </li>
            <li>
              <a class="links" href="#!">Link 3</a>
            </li>
            <li>
              <a class="links" href="#!">Link 4</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

          <!-- Links -->
          <h5 class="text-uppercase footerWhite">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a class="links" href="#!">Link 1</a>
            </li>
            <li>
              <a class="links" href="#!">Link 2</a>
            </li>
            <li>
              <a class="links" href="#!">Link 3</a>
            </li>
            <li>
              <a class="links" href="#!">Link 4</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid
      row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a class="links" href=""> XRS enterprise</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Lobster&display=swap" rel="stylesheet">

  </body>

</html>

<?php
session_start();
include('verifica.php');
?>
