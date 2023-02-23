    <?php 
      include ('header.php')
    ?>

<div class="carouser mt-2 pt-2 container-fluid shadow-lg p-2 mb-1 bg-body-tertiary rounded">

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
    
        <div class="carousel-inner">
          <div class="carousel-item active c-item">
            <img src="./img/imagen1.jpg" class="d-block w-100 c-img" alt="...">
          </div>
    
          <div class="carousel-item c-item">
            <img src="./img/imagen2.jpg" class="d-block w-100 c-img" alt="...">
          </div>
    
          <div class="carousel-item c-item">
            <img src="./img/imagen3.jpg" class="d-block w-100 c-img" alt="...">
          </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
    
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>
    </div>

<section id="productos">
  <h3 class="coleccion-de-productos">CONOCE NUESTROS PRODUCTOS</h3>
    <a href="jeans.php" class="links">
    <div class="div-productos">
      <div class="contenido-productos">
        <label class="contenido-1" for="1">
          <p class="textos-tarjetas"><strong>JEANS</strong></p>
        </label>
      </div>
      </a>    
      <a href="chaquetas.php" class="links"> 
      <div class="contenido-productos">
        <label class="contenido-2" for="1">
          <P class="textos-tarjetas"><strong>CHAQUETAS</strong></P>
        </label>
      </div>
      </a> 
    </div>
  
</section>

<section id="productos">
  <a href="shorts.php" class="links"> 
    <div class="div-productos-2">
      <div class="contenido-productos">
        <label class="contenido-3" for="1">
          <P class="textos-tarjetas"><strong>SHORTS</strong></P>
        </label>
      </div>
  </a>
  <a href="bragas.php" class="links"> 
      <div class="contenido-productos">
        <label class="contenido-4" for="1">
          <p class="textos-tarjetas"><strong>BRAGAS</strong></p>
        </label>
      </div>
    </div>
  </a>  
</section>



<?php 
  include ('footer.php')
?>

    