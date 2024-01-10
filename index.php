<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('modelo/head.php'); ?>
</head>

<body>
  <div class="container py-5" id="divModulos">
    <div class="row">
      <div class="col-md-12">
        <?php include('modelo/header.php'); ?>
      </div>

    </div>



    <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide col-md-12" data-ride="carousel" style="height: auto;">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="img-fluid d-block w-100 " src="vista/MDB v4.14.1/img/carousel/AdminEmpresas.jpg" alt="First slide">

          </div>
          <div class="carousel-item">
            <img class="img-fluid d-block w-100" src="vista/MDB v4.14.1/img/carousel/aspel.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block text-center text-dark">
              <p class="h2">Expertos</p>
              <p class="h5"> Administra tu negocio o empresa con los sistemas de aspel,<br>
                ya que somos el lugar numero 1 en administración de negocios y<br>
                empresas en todo México.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="img-fluid d-block w-100" src="vista/MDB v4.14.1/img/carousel/carousel 4.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="img-fluid d-block w-100" src="vista/MDB v4.14.1/img/carousel/carousel 6.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="img-fluid d-block w-100" src="vista/MDB v4.14.1/img/carousel/carousel 7.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="img-fluid d-block w-100" src="vista/MDB v4.14.1/img/carousel/carousel 8.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-dark" href="#carouselExampleIndicators" role="button" data-slide="next">

          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="col-md-4 py-3">
        <div class="shadow p-3 mb-5 bg-white rounded text-dark">
          <p class="h1 text-center py-3"><i class="fas fa-award"></i> Expertos</p>
          <img src="vista/MDB v4.14.1/img/inicio/shadows1.png" class="img-fluid col-md-12">
          <p class="h5 py-2">
            Administra tu negocio o empresa con los sistemas de aspel,
            ya que somos el lugar número 1 en administración de negocios y
            empresas en todo México.
          </p>
        </div>
      </div>
      <div class="col-md-8 py-3">
        <div class="card">
          <h5 class="card-header">Propósito</h5>
          <div class="card-body">
            <h5 class="card-title">Lo más importante para nosotros eres tú.</h5>
            <p class="card-text h6 py-2">Hoy en dia entendemos la importancia de tu empresa o negocio, para que tu
              negocio crezca necesitas ser administrado de la mejor manera y que tengas la tecnológia necesaria
              para creecer
            </p>
            <div class="row">
              <div class="col-md-4">
                <p class="text-info text-center"><i class="fas fa-laptop-code" style="font-size: 100px;"></i></p>
                <p class="text-left">Somos tu solución en equipos de computo, servidores, dispositivos de red
                  y sistemas de administración</p>
              </div>
              <div class="col-md-4">
                <p class="text-success text-center"><i class="fas fa-handshake" style="font-size: 100px;"></i></p>
                <p class="text-justify ">Nuestro principal objetivo es la mejora continua de tus procesos
                  administrativos y tecnológicos.
                </p>
              </div>
              <div class="col-md-4">
                <p class="text-warning text-center"><i class="fas fa-users" style="font-size: 100px;"></i></p>
                <p class="text-right ">Contamos con el personal más capacitado para
                  atender las necesidad de tu empresa.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <?php include('modelo/footer.php'); ?>
    </div>

  </div>

<script src="controlador/infoPage.js"></script>

</body>

</html>