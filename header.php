<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/720f2110e7.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <header id="inicio">
      <nav class="navbar navbar-expand-lg bg-black fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="index.php">
            <p class="h1">TITULO DE LA PAGINA</p>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white ms-2" aria-current="page" href="#inicio"><i class="fa-sharp fa-solid fa-house"></i></a>
              </li>
              </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
          </div>
        </div>
      </nav>

      <nav class="navbar navbar-expand-lg bg-black">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">
            <p class="h1">.</p>
          </a>
        </div>      
      </nav>
    </header>

    <div>
      <div class="row bg-light text-dark text-center container-fluid shadow p-1 mb-5 bg-body-tertiary rounded ms-1 pe-5">
        <div class="col-xs-12 col-md-6 col-lg-3">
          <a class="text-black text-decoration-none" href="jeans.php"><em>Jeans</em></a>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
          <a class="text-black text-decoration-none" href="chaquetas.php"><em>Chaquetas</em></a>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
          <a class="text-black text-decoration-none" href="shorts.php"><em>Shorts</em></a>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
          <a class="text-black text-decoration-none" href="bragas.php"><em>Bragas</em></a>
        </div>
      </div>
    </div>
    