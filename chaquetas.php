<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="./css/chaquetas.css">
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

    <section id="chaquetas">
        <h3 class="coleccion-de-chaquetas">COLECCIÓN DE CHAQUETAS</h3>
        <div class="div-chaquetas">
          <div class="contenido-chaquetas">
            <label class="contenido-1" for="1">
            </label>
            <p class="informacion-chaquetas-1">10130-36482</p>
            <p class="informacion-chaquetas-2">MOST WANTED<br>Talla S - XL </p>
          </div>
          <div class="contenido-chaquetas">
            <label class="contenido-2" for="1">
            </label>
            <p class="informacion-chaquetas-1">10130-36482</p>
            <p class="informacion-chaquetas-2">MOST WANTED<br>Talla S - XL </p>
          </div>
        </div>
      </section>

      <section id="chaquetas">
        <div class="div-chaquetas">
          <div class="contenido-chaquetas-plus">
            <label class="contenido-3" for="1">
            </label>
            <p class="informacion-chaquetas-1">AA-83412</p>
            <p class="informacion-chaquetas-2">SEXY CONTURE<br>Talla S - XL</p>
          </div>
          <div class="contenido-chaquetas-plus">
            <label class="contenido-4" for="1">
            </label>
            <p class="informacion-chaquetas-1">AA-83495</p>
            <p class="informacion-chaquetas-2">SEXY CONTURE<br>Talla S - XL</p>
          </div>
        </div>
      </section>

      <div class="boton-wp">
        <a href="https://web.whatsapp.com/" target="_blank" >
          <button class="whatasapp"></button>
        </a>
      </div>

      <div class="container-fluid">
        <div class="row p-5 pb-2 bg-dark text-white mt-5">
          <div class="col-xs-12 col-md-6 col-lg-3 offset-2">
            <p class="h3">Nombre Empresa</p>
            <div class="h5 mb-3"></div>
            <p class="text-secondary text-decoration-none">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem minima et quaerat ducimus molestiae consequatur mollitia recusandae</p>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-3">
            <p class="h5 mb-3 ms-5">Servicio al cliente</p>
            <div class="mb-2">
              <a class="text-secondary text-decoration-none ms-5" href="#">Enlace 1</a>
            </div>
            <div class="mb-2">
              <a class="text-secondary text-decoration-none ms-5" href="#">Enlace 2</a>
            </div>
            <div class="mb-2">
              <a class="text-secondary text-decoration-none ms-5" href="#">Enlace 3</a>
            </div>
            <div class="mb-2">
              <a class="text-secondary text-decoration-none ms-5" href="#">Enlace 4</a>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-3">
            <p class="h5 mb-3 ms-5">Redes sociales</p>
            <div class="mb-2">
              <a class="text-secondary text-decoration-none ms-5" href="#">Enlace 1</a>
            </div>
            <div class="mb-2">
              <a class="text-secondary text-decoration-none ms-5" href="#">Enlace 2</a>
            </div>
            <div class="mb-2">
              <a class="text-secondary text-decoration-none ms-5" href="#">Enlace 3</a>
            </div>
            <div class="mb-2">
              <a class="text-secondary text-decoration-none ms-5" href="#">Enlace 4</a>
            </div>
          </div>
          
          <div class="col-xs-12 pt-5"></div>
            <p class="text-white text-center">Copyright - All rights reserved 2022</p>
        </div>
      </div>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
  </html>