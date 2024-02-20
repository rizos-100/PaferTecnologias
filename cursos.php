<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('modelo/head.php'); ?>
</head>

<body>
    <?php include('modelo/header.php'); ?>

    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-md-12 py-2">
                <div class="jumbotron jumbotron-fluid text-dark" style="background: url('vista/MDB v4.14.1/img/cursos/fondoCursos.jpg') 
            no-repeat fixed center;
            background-size: cover;
            height: 100%;
            width: 100% ;
            opacity: 0.9;">
                    <div class="container text-dark">
                        <h1 class="display-4">Cursos prácticos para<br> tu futuro</h1>
                        <p class="lead">Te ofrecemos cursos personalizados para<br>
                            tu empresa y mejores tu conocimiento<br>
                            administrativo...<br>
                        </p>
                    </div>

                </div>
            </div>
            <div id="content" class="col-md-10 text-center" style="display: none;">
                <p class="h3 py-4">Instalaciones para los cursos</p>
                <div id="carrusel">
                    <a href="#" class="left-arrow text-dark h3"><i class="fas fa-chevron-left"></i></a>
                    <a href="#" class="right-arrow text-dark h3"><i class="fas fa-chevron-right"></i></a>
                    <div class="carrusel">
                        <div class="product" id="product_0">
                            <a href="#" onclick="cambiarImg(1)" data-toggle="modal" data-target="#centralModalSm">
                                <img src="vista/MDB v4.14.1/img/cursos/cursos1.jpeg" width="300px;" height="200px;" />
                            </a>
                        </div>
                        <div class="product" id="product_1">
                            <a href="#" onclick="cambiarImg(2)" data-toggle="modal" data-target="#centralModalSm">
                                <img src="vista/MDB v4.14.1/img/cursos/cursos2.jpeg" width="300px;" height="200px;" />
                            </a>
                        </div>
                        <div class="product" id="product_2">
                            <a href="#" onclick="cambiarImg(3)" data-toggle="modal" data-target="#centralModalSm">
                                <img src="vista/MDB v4.14.1/img/cursos/cursos3.jpeg" width="300px;" height="200px;" />
                            </a>
                        </div>
                        <div class="product" id="product_3">
                            <a href="#" onclick="cambiarImg(4)" data-toggle="modal" data-target="#centralModalSm">
                                <img src="vista/MDB v4.14.1/img/cursos/cursos1.jpeg" width="300px;" height="200px;" />
                            </a>
                        </div>
                        <div class="product" id="product_4">
                            <a href="#" onclick="cambiarImg(5)" data-toggle="modal" data-target="#centralModalSm">
                                <img src="vista/MDB v4.14.1/img/cursos/cursos2.jpeg" width="300px;" height="200px;" />
                            </a>
                        </div>
                        <div class="product" id="product_5">
                            <a href="#" onclick="cambiarImg(6)" data-toggle="modal" data-target="#centralModalSm">
                                <img src="vista/MDB v4.14.1/img/cursos/cursos3.jpeg" width="300px;" height="200px;" />
                            </a>
                        </div>
                        <div class="product" id="product_6">
                            <a href="#" onclick="cambiarImg(7)" data-toggle="modal" data-target="#centralModalSm">
                                <img src="vista/MDB v4.14.1/img/cursos/cursos1.jpeg" width="300px;" height="200px;" />
                            </a>
                        </div>
                        <div class="product" id="product_7">
                            <a href="#" onclick="cambiarImg(8)" data-toggle="modal" data-target="#centralModalSm">
                                <img src="vista/MDB v4.14.1/img/cursos/cursos2.jpeg" width="300px;" height="200px;" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mb-4 py-2">

                <!-- Card -->
                <div class="card gradient-card">

                    <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

                        <!-- Content -->
                        <a href="#!">
                            <div class="text-white d-flex h-100 mask blue-gradient-rgba">
                                <div class="first-content align-self-center p-3">
                                    <h3 class="card-title">Cursos para los Sistemas Aspel</h3>
                                    <p class="lead mb-0">Te ofrecemos estos cursos en tu iguala mensual o por póliza.</p>
                                </div>
                                <div class="second-content  align-self-center mx-auto text-center">
                                    <i class="fas fa-mouse" style="font-size: 60px;"></i>
                                </div>
                            </div>
                        </a>

                    </div>

                    <!-- Content -->
                    <div class="card-body white animated">
                        <div class="progress md-progress">
                            <div class="progress-bar blue-gradient-rgba" role="progressbar" style="width: 80%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted">El 80% de las medianas y pequeñas empresas usan estos sistemas</p>
                        <h4 class="text-uppercase font-weight-bold my-4">Detalles</h4>
                        <p class="text-muted text-justify">Podemos darte cursos al contratar tu iguala mensual o comprando una póliza
                            de nuestros servicio y mantenerte al tanto de las nuevas actualizaciones con el SAT y como implementarlo
                            en los sistemas o enseñarte desde un nivel básico hasta avanzado.
                        </p>

                        <div class="row mt-1">
                            <div class="col-md-12">

                                <!-- Stepers Wrapper -->
                                <ul class="stepper stepper-vertical">

                                    <!-- First Step -->
                                    <li class="active">
                                        <a href="#!">
                                            <span class="circle">1</span>
                                            <span class="label">Nivel básico</span>
                                        </a>
                                    </li>

                                    <!-- Second Step -->
                                    <li class="active">

                                        <!--Section Title -->
                                        <a href="#!">
                                            <span class="circle">2</span>
                                            <span class="label">Nivel intermedio</span>
                                        </a>

                                        <!-- Section Description -->
                                    </li>

                                    <!-- Third Step -->
                                    <li class="active">
                                        <a href="#!">
                                            <span class="circle">3</span>
                                            <span class="label">Nivel avanzado</span>
                                        </a>
                                    </li>
                                    <div class="py-3">
                                        <button class="btn btn-info col-md-12" data-toggle="modal" data-target="#modalPDF" onclick="ocultarScroll()"> VER COSTOS</button>

                                    </div>

                                </ul>
                                <!-- /.Stepers Wrapper -->

                            </div>
                        </div>

                    </div>

                </div>
                <!-- Card -->

            </div>
            <div class="col-md-5 mb-4 py-2">

                <!-- Card -->
                <div class="card gradient-card">

                    <div class="card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

                        <!-- Content -->
                        <a href="#!">
                            <div class="text-white d-flex h-100 mask aqua-gradient-rgba">
                                <div class="first-content align-self-center p-3">
                                    <h3 class="card-title">Cursos de la paqueteria de Office</h3>
                                    <p class="lead mb-0">Te ofrecemos estos cursos en tu iguala mensual o por póliza.</p>
                                </div>
                                <div class="second-content  align-self-center mx-auto text-center">
                                    <i class="fas fa-mail-bulk" style="font-size: 50px;"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body white animated">
                        <div class="progress md-progress">
                            <div class="progress-bar aqua-gradient-rgba" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted">El 100% de las empresas usan Office</p>
                        <h4 class="text-uppercase font-weight-bold my-4">Detalles</h4>
                        <p class="text-muted text-justify">Como puedes ver las paqueterias de office en sus distintas versiones se
                            actualizan y nosotros te podemos dar cursos desde principiante hasta avanzado para que uses a 100%
                            la funcionalidad de estas herramientas.
                        </p>
                        <div class="row mt-1">
                            <div class="col-md-12">

                                <!-- Stepers Wrapper -->
                                <ul class="stepper stepper-vertical">

                                    <!-- First Step -->
                                    <li class="active">
                                        <a href="#!">
                                            <span class="circle">1</span>
                                            <span class="label">Nivel principiante</span>
                                        </a>
                                        <div class="step-content grey lighten-3">
                                            <p>Costo: por pólizas de horas o iguala mensual.</p>
                                        </div>
                                    </li>

                                    <!-- Second Step -->
                                    <li class="active">

                                        <!--Section Title -->
                                        <a href="#!">
                                            <span class="circle">2</span>
                                            <span class="label">Nivel intermedio</span>
                                        </a>

                                        <!-- Section Description -->
                                        <div class="step-content grey lighten-3">
                                            <p>Costo: por pólizas de horas o iguala mensual.</p>
                                        </div>
                                    </li>

                                    <!-- Third Step -->
                                    <li class="active">
                                        <a href="#!">
                                            <span class="circle">3</span>
                                            <span class="label">Nivel avanzado</span>
                                        </a>
                                        <div class="step-content grey lighten-3">
                                            <p>Costo: por pólizas de horas o iguala mensual.</p>
                                        </div>
                                    </li>



                                </ul>
                                <!-- /.Stepers Wrapper -->

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade" id="modalPDF" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

            <!-- Change class .modal-sm to change the size of the modal -->
            <div class="modal-dialog modal-lg" role="document">


                <div class="modal-content">
                    <div class="modal-header text-white bg-default">
                        <h4 class="modal-title w-100" id="myModalLabel">Costos de Sistemas Aspel</h4>
                        <button type="button" class="close" onclick="mostrarScroll()" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <iframe 
                        src="<?php echo $URL_VISOR_PDF ?>CURSOS_PAFER_COSTOS.pdf" 
                        style="min-height: 500px;" width="100%" height="100%"></iframe>
                        <img class="banner" 
                        src="https://electo.pe/electo_newsite/wp-content/uploads/2020/03/banner-desarrollo-web.png" 
                        alt="Banner"
                        style="height: calc(50vh);display:none;">
                        <div class="message" style="display:none;">
                            Este sitio está actualmente en desarrollo. ¡Vuelve pronto!
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="mostrarScroll()" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include('modelo/footer.php'); ?>
</body>

</html>