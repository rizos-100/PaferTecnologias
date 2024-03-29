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
                <div class="jumbotron jumbotron-fluid text-dark" style="background: url('vista/MDB v4.14.1/img/capacitacion/fondoCapacitacion.png') 
            no-repeat fixed center;
            background-size: cover;
            height: 100%;
            width: 100% ;
            opacity: 0.9;">
                    <div class="container text-white">
                        <h1 class="display-4">Asesorias y Capacitaciones<br> de tu alcance</h1>
                        <p class="lead">Nosotros te asesoramos para cualquier<br>
                            proceso o implementación administrativa <br>
                            que quieras manejar en tu empresa...<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-9 shadow p-3 mb-5 bg-white rounded py-3">
                <div class="row">
                    <div class="col-md-4 text-center py-1">
                        <img src="vista/MDB v4.14.1/img/capacitacion/satAspel.JPG" width="200px" height="200px" class="img-fluid">
                    </div>
                    <div class="col-md-8 text-justify py-1">
                        <p class="h5 text-dark py-1"> Te ofrecemos capacitaciones en los sistemas aspel para que lleves a cabo
                            tu facturación, contabilidad, etc. Realizamos capacitaciones conforme
                            cambian las leyes del SAT con la nueva facturación y nos apegamos a los
                            nuevos lineamientos.
                        </p>
                        <p class="h5 text-dark py-1"> Tambien puedes solicitar una capacitacion personal o agendarlas.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-9 shadow p-3 mb-5 bg-white rounded py-3">
                <div class="row">
                    <div class="col-md-4 text-center py-1">
                        <img src="vista/MDB v4.14.1/img/capacitacion/capacitacion1.jpg" width="200px" height="200px" class="img-fluid">
                    </div>
                    <div class="col-md-8 text-justify py-1">
                        <p class="h5 text-dark py-1"> Hoy en dia los CRM (un modelo de gestión de toda la organización) son indispensables
                            para mantener una comunicación constante con tus clientes y queremos que seas parte de esta tecnológia con
                            nuestras capacitaciones.
                        </p>
                        <p class="h5 text-dark py-1"> Tambien puedes solicitar una capacitacion personal o agendarlas.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-10 shadow p-3 mb-5 bg-white rounded ">
                <div class="row">
                    <div class="col-md-4 text-center py-1">
                        <img src="vista/MDB v4.14.1/img/asesoria/asesoria1.jpg" width="400px" height="500px" class="img-fluid">
                    </div>
                    <div class="col-md-4 text-justify py-1">
                        <p class="text-primary py-1 text-center" style="font-size: 40px;"> <i class="fas fa-chalkboard"></i> Asesores</p>
                        <p class="h6 text-dark py-1"> Nuestros asesores van hasta la puerta de tu negocio y te asesorarán
                            de acuerdo a tu necesidad, desde procesos administrativos con los Sistemas Aspel, infrestructura en redes y servidores,
                            ventas de equipos de computo, diseño y desarrollo de paginas web, hasta instalaciones en cámaras.
                        </p>

                    </div>
                    <div class="col-md-4 text-justify py-1">
                        <p class="text-success py-1 text-center" style="font-size: 40px;"> <i class="fas fa-dollar-sign"></i> Costo</p>
                        <p class="h6 text-dark py-1"> Para contratar nuestros servicios va de acuerdo a las pólizas que tenemos
                            al mejor precio y brindandote soporte directamente con gente de aspel y distribuidores de infrestructura. Para
                            ver más información acerca de esto da click en el botón
                        </p>


                    </div>
                    <div class="col-md-12 text-center">
                        <button class="btn btn-success" onclick="cargarModuloSoporte()"><i class="fas fa-dollar-sign"></i> Ir a costos</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('modelo/footer.php'); ?>
</body>

</html>