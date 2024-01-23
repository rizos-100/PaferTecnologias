<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('modelo/head.php'); ?>
    <style>
        .card-img-top {
            /* Aumentamos la anchura y altura durante 2 segundos */
            transition: width 2s, height 2s, transform 2s;
            -moz-transition: width 2s, height 2s, -moz-transform 2s;
            -webkit-transition: width 2s, height 2s, -webkit-transform 2s;
            -o-transition: width 2s, height 2s, -o-transform 2s;
        }

        .card-img-top:hover {
            /* tranformamos el elemento al pasar el mouse por encima al doble de
           su tamaño con scale(2). */
            transform: scale(1.3);
            -moz-transform: scale(1.3);
            /* Firefox */
            -webkit-transform: scale(1.3);
            /* Chrome - Safari */
            -o-transform: scale(1.3);
            /* Opera */
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php include('modelo/header.php'); ?>

    <div class="container-fluid py-5">
        <div class="jumbotron jumbotron-fluid text-white bg-default">
            <div class="container">
                <h1 class="display-4">Te ofrecemos...</h1>
                <p class="lead">Aquí encontrarás los productos que tu necesitas para tu
                    empresa o negocio de la mejor calidad y a un precio accesible.
                </p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-3 text-center py-3">
                    <div class="card">
                        <img class="card-img-top" src="vista/MDB v4.14.1/img/productos/img5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Ventas en: </h5>
                            <p class="card-text">Equipos de computo como laptops y computadoras o componentes.</p>
                            <a href="#" target="_blank" class="btn btn-outline-default" data-toggle="modal" data-target="#modalLoginForm">Informes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center py-3">
                    <div class="card">
                        <img class="card-img-top" src="vista/MDB v4.14.1/img/productos/img6.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Redes: </h5>
                            <p class="card-text">Realizamos cableados estructurados y venta de Switch, Routers, Firewalls, etc.</p>
                            <a href="#" target="_blank" class="btn btn-outline-default" data-toggle="modal" data-target="#modalLoginForm">Informes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center py-3">
                    <div class="card">
                        <img class="card-img-top" src="vista/MDB v4.14.1/img/productos/img7.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">No Brake’s y Reguladores</h5>
                            <p class="card-text">Para que mantengas seguro toda tu infrestructura y oficinas.</p>
                            <a href="#" target="_blank" class="btn btn-outline-default" data-toggle="modal" data-target="#modalLoginForm">Informes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center py-3">
                    <div class="card">
                        <img class="card-img-top" src="vista/MDB v4.14.1/img/productos/img8.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">CRM y aplicaciones móviles</h5>
                            <p class="card-text">Instalaciones en CRM y aplicaciones móviles en distitnas plataformas</p>
                            <a href="#" target="_blank" class="btn btn-outline-default" data-toggle="modal" data-target="#modalLoginForm">Informes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center py-3">
                    <div class="card">
                        <img class="card-img-top" src="vista/MDB v4.14.1/img/productos/img9.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Escáner para código de barras</h5>
                            <p class="card-text">Para registrar tus productos.</p>
                            <a href="#" target="_blank" class="btn btn-outline-default" data-toggle="modal" data-target="#modalLoginForm">Informes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center py-3">
                    <div class="card">
                        <img class="card-img-top" src="vista/MDB v4.14.1/img/productos/img10.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Servidores</h5>
                            <p class="card-text">Esta es la solución para montar tus aplicaciones</p>
                            <a href="#" target="_blank" class="btn btn-outline-default" data-toggle="modal" data-target="#modalLoginForm">Informes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center py-3">
                    <div class="card">
                        <img class="card-img-top" src="vista/MDB v4.14.1/img/productos/img11.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Sistemas Aspel</h5>
                            <p class="card-text">Para todas las empresas(PyMES) es la mejor solución.</p>
                            <div class="row justify-content-center">
                                <a href="#" target="_blank" class="btn btn-outline-default btn-sm" data-toggle="modal" data-target="#modalLoginForm">Informes</a>
                                <a href="aspel.php"  class="btn btn-default btn-sm">Ver costos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center py-3">
                    <div class="card">
                        <img class="card-img-top" src="vista/MDB v4.14.1/img/productos/img12.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Paquetes de Timbres</h5>
                            <p class="card-text">Tenemos los timbres que necesita para facturar a tiempo.</p>
                            <div class="row justify-content-center">
                                <a href="#" target="_blank" class="btn btn-outline-default btn-sm" data-toggle="modal" data-target="#modalLoginForm">Informes</a>
                                <div>
                                    <a href="#" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modalPDF" onclick="ocultarScroll()">Ver Costos</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center py-3">
                    <div class="card">
                        <img class="card-img-top" src="vista/MDB v4.14.1/img/productos/img13.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Cámaras de Seguridad</h5>
                            <p class="card-text">Tenemos la mejor solución para la seguridad de tu empresa.</p>
                            <a href="#" target="_blank" class="btn btn-outline-default" data-toggle="modal" data-target="#modalLoginForm">Informes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center py-3">
                    <div class="card">
                        <img class="card-img-top" src="vista/MDB v4.14.1/img/productos/img14.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Impresoras</h5>
                            <p class="card-text">Contamos con los mejores equipos de impresión y escanner.</p>
                            <a href="#" target="_blank" class="btn btn-outline-default" data-toggle="modal" data-target="#modalLoginForm">Informes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center py-3">
                    <div class="card">
                        <img class="card-img-top" src="vista/MDB v4.14.1/img/productos/img15.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Antivirus</h5>
                            <p class="card-text">Manten siempre protegido tus equipos de virus.</p>
                            <a href="#" target="_blank" class="btn btn-outline-default" data-toggle="modal" data-target="#modalLoginForm">Informes</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center bg-default text-white">
                        <h4 class="modal-title w-100 font-weight-bold">Elige la forma de pedir información</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <p class="h4">Pedir informes por: </p>
                        <a href="https://m.me/100666244944026" target="_blank" class="bg-white h4 text-primary mr-2 ml-2" style="font-size: 60px;"><i class="fab fa-facebook-messenger"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=524776351411" target="_blank" class="bg-white h4 text-success mr-2 ml-2" style="font-size: 60px;"><i class="fab fa-whatsapp"></i></a>
                        <a href="mailto:ventaspafer@gmail.com" class="bg-white h4 text-dark mr-2 ml-2" style="font-size: 60px;"><i class="fas fa-at"></i></a>

                    </div>
                    <div class="modal-footer d-flex justify-content-end">
                        <button class="btn btn-danger" class="close" data-dismiss="modal" aria-label="Close">Cerrar</button>
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
                        <iframe src="<?php echo $URL_VISOR_PDF ?>COSTOS_DE_TIMBRES_2022.pdf" 
                        style="display:none; min-height: 500px;" width="100%" height="100%"
                        ></iframe>

                        <img class="banner" 
                        src="https://electo.pe/electo_newsite/wp-content/uploads/2020/03/banner-desarrollo-web.png" 
                        alt="Banner"
                        style="height: calc(50vh);">
                        <div class="message">
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