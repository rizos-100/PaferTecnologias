function cargarModuloContactanos(){
    $.ajax(
        {
            type: "GET",
            url: "modelo/contacto.html",
            async: true
        }
    ).done(
            function (data)
            {
                $('#divModulos').html(data);
            }
);
}

function cargarModuloProductos(){
    $.ajax(
        {
            type: "GET",
            url: "modelo/productos.html",
            async: true
        }
    ).done(
            function (data)
            {
                $('#divModulos').html(data);
            }
);
}

function cargarModuloAspel(){
    $.ajax(
        {
            type: "GET",
            url: "modelo/aspel.html",
            async: true
        }
    ).done(
            function (data)
            {
                $('#divModulos').html(data);
            }
);
}


function cargarModuloSoporte(){
    $.ajax(
        {
            type: "GET",
            url: "modelo/soporte.html",
            async: true
        }
    ).done(
            function (data)
            {
                $('#divModulos').html(data);
            }
);
}
function cargarModuloCapacitacion(){
    $.ajax(
        {
            type: "GET",
            url: "modelo/capacitacion.html",
            async: true
        }
    ).done(
            function (data)
            {
                $('#divModulos').html(data);
            }
);
}

function cargarModuloCursos(){
    $.ajax(
        {
            type: "GET",
            url: "modelo/cursos.html",
            async: true
        }
    ).done(
            function (data)
            {
                $('#divModulos').html(data);
            }
);
}

function avisarAlert(){
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