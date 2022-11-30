<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('modelo/head.php'); ?>
    <link rel="stylesheet" href="vista/MDB v4.14.1/css/stylesCarousel.css">
    <link rel="stylesheet" href="vista/MDB v4.14.1/css/style.css">
    <script src="vista/MDB v4.14.1/js/concurrentThread.js"></script>
    <script src="controlador/funcionAspel.js"></script>
</head>

<body>
    <?php

    $linkYoutube = [
        'https://www.youtube.com/embed/W22y4-k3Ucs',
        'https://www.youtube.com/embed/tb_VvjzjekE',
        'https://www.youtube.com/embed/EYvdIX2Dw4A',
        'https://www.youtube.com/embed/iqlYe5AeFh0',
        'https://www.youtube.com/embed/fa4yPQMGy5A',
        'https://www.youtube.com/embed/svl1QHLogGs',
        'https://www.youtube.com/embed/Iz9LI7WoU3I',
        'https://www.youtube.com/embed/XBJNQ5BEZHg',
        'https://www.youtube.com/embed/U_52KPCMAso',
        'https://www.youtube.com/embed/P97-pd-fRYM',
        'https://www.youtube.com/embed/YxeyGqtRbEU',
        'https://www.youtube.com/embed/sIznEMZHQJo'
    ];

    ?>
    <?php include('modelo/header.php'); ?>

    <div class="container-fluid py-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="jumbotron jumbotron-fluid text-dark" style="background: url('vista/MDB v4.14.1/img/aspel/fondoAspel.jpg')
                no-repeat fixed center;
                background-size: cover;
                height: 100%;
                width: 100% ;">
                        <div class="container">
                            <h1 class="display-4">Haz crecer tu negocio...</h1>
                            <p class="lead">Si necesitas facturar, tener al dia tus impuestos, llevar tu contabilidad<br>
                                tener un registro de tus empleados,etc. Esta es tu mejor opción, para<br>
                                conocer los precios de cada sistema da click en la imagen<br>
                                del producto que quieres conocer..<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div id="content" class="col-md-10">

                    <div class="col-md-12 py-3">
                        <div class="card blue-gradient">
                            <div class="card-body ">
                                <h1 class="card-title text-white text-center">Sistemas Aspel</h1>
                                <p class="h5 text-white">Para poder visualizar las caracteríticas y costos de los sistemas da click o
                                    presiona
                                    sobre el sistema que quieres conocer...
                                </p>
                            </div>
                        </div>
                    </div>

                    <div id="carrusel">
                        <a href="#" class="left-arrow text-dark h3"><i class="fas fa-chevron-left"></i></a>
                        <a href="#" class="right-arrow text-dark h3"><i class="fas fa-chevron-right"></i></a>
                        <div class="carrusel">
                            <div class="product" id="product_0">
                                <a href="#" onclick="cambiarImg(1)" data-toggle="modal" data-target="#centralModalSm">
                                    <img src="vista/MDB v4.14.1/img/carouselAspel/aspelSAE.jpg" width="200px;" height="200px;" />
                                </a>
                            </div>
                            <div class="product" id="product_1">
                                <a href="#" onclick="cambiarImg(2)" data-toggle="modal" data-target="#centralModalSm">
                                    <img src="vista/MDB v4.14.1/img/carouselAspel/aspelCOI.png" width="200px;" height="200px;" />
                                </a>
                            </div>
                            <div class="product" id="product_2">
                                <a href="#" onclick="cambiarImg(3)" data-toggle="modal" data-target="#centralModalSm">
                                    <img src="vista/MDB v4.14.1/img/carouselAspel/aspelBANCOS.png" width="200px;" height="200px;" />
                                </a>
                            </div>
                            <div class="product" id="product_3">
                                <a href="#" onclick="cambiarImg(4)" data-toggle="modal" data-target="#centralModalSm">
                                    <img src="vista/MDB v4.14.1/img/carouselAspel/aspelADM.png" width="200px;" height="200px;" />
                                </a>
                            </div>
                            <div class="product" id="product_4">
                                <a href="#" onclick="cambiarImg(5)" data-toggle="modal" data-target="#centralModalSm">
                                    <img src="vista/MDB v4.14.1/img/carouselAspel/aspelFACTURE.png" width="200px;" height="200px;" />
                                </a>
                            </div>
                            <div class="product" id="product_5">
                                <a href="#" onclick="cambiarImg(6)" data-toggle="modal" data-target="#centralModalSm">
                                    <img src="vista/MDB v4.14.1/img/carouselAspel/aspelCAJA.png" width="200px;" height="200px;" />
                                </a>
                            </div>
                            <div class="product" id="product_6">
                                <a href="#" onclick="cambiarImg(7)" data-toggle="modal" data-target="#centralModalSm">
                                    <img src="vista/MDB v4.14.1/img/carouselAspel/aspelNOI.png" width="200px;" height="200px;" />
                                </a>
                            </div>
                            <div class="product" id="product_7">
                                <a href="#" onclick="cambiarImg(8)" data-toggle="modal" data-target="#centralModalSm">
                                    <img src="vista/MDB v4.14.1/img/carouselAspel/aspelPROD.png" width="200px;" height="200px;" />
                                </a>
                            </div>
                            <div class="product" id="product_8">
                                <a href="#" onclick="cambiarImg(9)" data-toggle="modal" data-target="#centralModalSm">
                                    <img src="vista/MDB v4.14.1/img/carouselAspel/aspelNUBE.png" width="200px;" height="200px;" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <?php foreach ($linkYoutube as $link) { ?>
                    <div class="col-md-4 text-center">
                        <iframe width="100%" height="370" src="<?= $link ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <?php } ?>

                <div class="col-md-6 text-center">
                    <img src="vista/MDB v4.14.1/img/aspel/fondoAspelPafer.jpg" class="img-fluid">
                </div>
            </div>
        </div>

        <!-- Central Modal Small -->
        <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

            <!-- Change class .modal-sm to change the size of the modal -->
            <div class="modal-dialog modal-lg" role="document">


                <div class="modal-content">
                    <div class="modal-header text-white bg-default">
                        <h4 class="modal-title w-100" id="myModalLabel">Costos de Sistemas Aspel</h4>
                        <button type="button" class="close" data-dismiss="modal" onclick="mostrarScroll()" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center" id="contenidoAspel">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" onclick="mostrarScroll()" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Central Modal Small -->
        <!-- Central Modal Small -->
        <div class="modal fade" id="modalAnuncio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

            <!-- Change class .modal-sm to change the size of the modal -->
            <div class="modal-dialog modal-lg" role="document">


                <div class="modal-content">
                    <div class="modal-header bg-default text-white">
                        <h4 class="modal-title w-100" id="myModalLabel">Capacitación y Cursos</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="vista/MDB v4.14.1/img/aspel/anuncio.jpg" class="img-fluid">

                    </div>
                    <div class="modal-footer">
                        <a href="cursos.php" class="btn btn-warning">Ir a Costos</a>
                        <button type="button" class="btn btn-primary" onclick="mostrarScroll()" class="close" data-dismiss="modal" aria-label="Close">Ver Sistemas</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            setTimeout(() => {
                $('#modalAnuncio').modal('show');
            }, 2000);
        </script>

        <!-- Central Modal Small -->

    </div>

    <?php include('modelo/footer.php'); ?>
</body>

</html>