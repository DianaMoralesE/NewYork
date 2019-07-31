<?php require_once 'partials/navbar.php'; ?>
<?php require_once 'partials/head.php'; ?>

  <body>
  <!-- carusel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carusel-3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/carusel-2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/carusel-1.jpg" class="d-block w-100 " alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--card-->
<div class="container" id="container-card">
  <article>
    <img src="img/icono-camion.jpg" alt="" width="80" height="80" >
    <h6 align="center">Envios a todo el país</h6>
    <p align="center">Calcula tu envio</p>
  </article>
  <article>
    <img src="img/tarjeta.png" alt=""width="80" height="80">
    <h6 align="center">Abona online</h6>
    <p align="center">Con todas las tarjetas de credito</p>
  </article>
  <article >
    <img src="img/candado.png" alt="" width="80" height="80">
    <h6>Protegemos tu compra</h6>
  </article>
</div>



  <?php require_once 'partials/footer.php'; ?>
  </body>
</html>
