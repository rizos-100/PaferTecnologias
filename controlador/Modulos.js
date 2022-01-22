window.setInterval(function () {
    $(".loader").fadeOut("slow");
}, 2000);
document.getElementsByTagName("html")[0].style.overflowX = "hidden";
$('#divModulos').removeClass();

function cargarModuloContactanos() {
    $('#divModulos').removeClass();
    $('#divModulos').addClass('container-fluid py-5');
    $(".loader").fadeIn("slow");
    $('#navbarSupportedContent-333').removeClass();
    $('#navbarSupportedContent-333').addClass('navbar-collapse collapse');

    $.ajax(
        {
            type: "GET",
            url: "modelo/contacto.html",
            async: true
        }
    ).done(
        function (data) {

            $('#divModulos').html(data);
            window.setInterval(function () {
                $(".loader").fadeOut("slow");
            }, 3000);
        }
    );
}

function cargarModuloProductos() {
    $('#divModulos').removeClass();
    $('#divModulos').addClass('container-fluid py-5');
    $(".loader").fadeIn("slow");
    $('#navbarSupportedContent-333').removeClass();
    $('#navbarSupportedContent-333').addClass('navbar-collapse collapse');

    $.ajax(
        {
            type: "GET",
            url: "modelo/productos.html",
            async: true
        }
    ).done(
        function (data) {
            $('#divModulos').html(data);
            window.setInterval(function () {
                $(".loader").fadeOut("slow");
            }, 3000);
        }
    );
}

function cargarModuloAspel() {
    $('#divModulos').removeClass();
    $('#divModulos').addClass('container-fluid py-5');
    $(".loader").fadeIn("slow");
    $('#navbarSupportedContent-333').removeClass();
    $('#navbarSupportedContent-333').addClass('navbar-collapse collapse');
    $.ajax(
        {
            type: "GET",
            url: "modelo/aspel.html",
            async: true
        }
    ).done(
        function (data) {
            $('#divModulos').html(data);

            $(document).ready(function () {
                $('#modalAnuncio').modal('toggle')
            });
            window.setInterval(function () {
                $(".loader").fadeOut("slow");
            }, 3000);

        }
    );
}

function cargarModuloSoporte() {
    $('#divModulos').removeClass();
    $('#divModulos').addClass('container-fluid py-5');
    $(".loader").fadeIn("slow");
    $('#navbarSupportedContent-333').removeClass();
    $('#navbarSupportedContent-333').addClass('navbar-collapse collapse');
    $.ajax(
        {
            type: "GET",
            url: "modelo/soporte.html",
            async: true
        }
    ).done(
        function (data) {
            $('#divModulos').html(data);
            $('.modal-backdrop').removeClass();
            window.setInterval(function () {
                $(".loader").fadeOut("slow");
            }, 3000);
        }
    );
}

function cargarModuloCapacitacion() {
    $('#divModulos').removeClass();
    $('#divModulos').addClass('container-fluid py-5');
    $(".loader").fadeIn("slow");
    $('#navbarSupportedContent-333').removeClass();
    $('#navbarSupportedContent-333').addClass('navbar-collapse collapse');
    $.ajax(
        {
            type: "GET",
            url: "modelo/capacitacion.html",
            async: true
        }
    ).done(
        function (data) {
            $('#divModulos').html(data);
            $('.modal-backdrop').removeClass();
            window.setInterval(function () {
                $(".loader").fadeOut("slow");
            }, 3000);
        }
    );
}

function cargarModuloCursos() {
    $('#divModulos').removeClass();
    $('#divModulos').addClass('container-fluid py-5');
    $(".loader").fadeIn("slow");
    $('#navbarSupportedContent-333').removeClass();
    $('#navbarSupportedContent-333').addClass('navbar-collapse collapse');
    $.ajax(
        {
            type: "GET",
            url: "modelo/cursos.html",
            async: true
        }
    ).done(
        function (data) {
            $('#divModulos').html(data);
            $('.modal-backdrop').removeClass();
            window.setInterval(function () {
                $(".loader").fadeOut("slow");
            }, 3000);
        }
    );
}

function cargarModuloAsesoria() {
    $('#divModulos').removeClass();
    $('#divModulos').addClass('container-fluid py-5');
    $(".loader").fadeIn("slow");
    $('#navbarSupportedContent-333').removeClass();
    $('#navbarSupportedContent-333').addClass('navbar-collapse collapse');
    $.ajax(
        {
            type: "GET",
            url: "modelo/asesoria.html",
            async: true
        }
    ).done(
        function (data) {
            $('#divModulos').html(data);
            window.setInterval(function () {
                $(".loader").fadeOut("slow");
            }, 3000);
        });
}

function cargarModuloSeguridad() {
    $('#divModulos').removeClass();
    $('#divModulos').addClass('container-fluid py-5');
    $(".loader").fadeIn("slow");
    $('#navbarSupportedContent-333').removeClass();
    $('#navbarSupportedContent-333').addClass('navbar-collapse collapse');
    $.ajax(
        {
            type: "GET",
            url: "modelo/seguridad.html",
            async: true
        }
    ).done(
        function (data) {
            $('#divModulos').html(data);
            window.setInterval(function () {
                $(".loader").fadeOut("slow");
            }, 3000);
        });
}

function cargarModuloMarketing() {
    $('#divModulos').removeClass();
    $('#divModulos').removeClass();
    $(".loader").fadeIn("slow");
    $('#navbarSupportedContent-333').removeClass();
    $('#navbarSupportedContent-333').addClass('navbar-collapse collapse');
    $.ajax(
        {
            type: "GET",
            url: "modelo/marketing.html",
            async: true
        }
    ).done(
        function (data) {
            $('#divModulos').html(data);
            window.setInterval(function () {
                $(".loader").fadeOut("slow");
            }, 3000);
        });
}

function avisarAlert() {


    $('#navbarSupportedContent-333').removeClass();
    $('#navbarSupportedContent-333').addClass('navbar-collapse collapse');

    Swal.fire({
        title: '<p class="text-primary h1">En desarrollo...</p>',
        text: 'Seguimos trabajando para ofrecerte mas servicios, Gracias por tu comprensión',
        imageUrl: 'vista/MDB v4.14.1/img/PAFER LOGO.jpg',
        imageWidth: 150,
        imageHeight: 150,
        imageAlt: 'Custom image',
        timer: 1500,
        showConfirmButton: false
    })
}

function ocultarScroll() {
    document.getElementsByTagName("html")[0].style.overflowY = "hidden";
}

function mostrarScroll() {
    document.getElementsByTagName("html")[0].style.overflowY = "auto";
}

$(document).ready(function(){
    
});

