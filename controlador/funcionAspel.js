var current = 0;
var imagenes = new Array();
var numImages = 11;

$(document).ready(function() {
    
    if (numImages <= 3) {
        $('.right-arrow').css('display', 'none');
        $('.left-arrow').css('display', 'none');
    }
     
    $('.left-arrow').on('click',function() {
        if (current > 0) {
            current = current - 1;
        } else {
            current = numImages - 3;
        }
        
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
        
        return false;
    });

    $('.left-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });

    $('.right-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });

    $('.right-arrow').on('click', function() {
        if (numImages > current + 3) {
            current = current + 1;
        } else {
            current = 0;
        }
        
    $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
        
        return false;
    }); 

 });

 window.setInterval(function(){
        if (numImages > current + 3) {
            current = current + 1;
        } else {
            current = 0;
        }
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}
                            , 600);
        console.log("TIMER ");
     },40000);


  function cambiarImg(num){
      var img = '';
    switch(num){
        case 1:
            img = '<img src="vista/MDB v4.14.1/img/aspel/descripcionSae.jpg" class="img-fluid">'+
            '<img src="vista/MDB v4.14.1/img/aspel/descripcionSae2.jpg" class="img-fluid"></img>'+
                '<img src="vista/MDB v4.14.1/img/aspel/saeCosto_2023.jpg" class="img-fluid">';
            break;
        case 2:
            img = '<img src="vista/MDB v4.14.1/img/aspel/descripcionCoi.jpg" class="img-fluid">'+
            '<img src="vista/MDB v4.14.1/img/aspel/coiCosto_2023.jpg" class="img-fluid">';
            break;
        case 3:
            img ='<img src="vista/MDB v4.14.1/img/aspel/descripcionBancos-.jpg" class="img-fluid">'+
             '<img src="vista/MDB v4.14.1/img/aspel/bancoCosto_2023.jpg" class="img-fluid">';
            break;
        case 4:
            img = '<img src="vista/MDB v4.14.1/img/aspel/descripcionAdm.jpg" class="img-fluid">'+
            '<img src="vista/MDB v4.14.1/img/aspel/admCosto_2023.jpg" class="img-fluid">';
            break;
        case 5:
            img = '<img src="vista/MDB v4.14.1/img/aspel/descripcionFacture-.jpg" class="img-fluid">'+
             '<img src="vista/MDB v4.14.1/img/aspel/factureCosto_2023.jpg" class="img-fluid">';
            break;
        case 6:
           img = '<img src="vista/MDB v4.14.1/img/aspel/descripcionCaja-.jpg" class="img-fluid">'+
           '<img src="vista/MDB v4.14.1/img/aspel/cajaCosto_2023.jpg" class="img-fluid">';
           break;
        case 7:
            img = '<img src="vista/MDB v4.14.1/img/aspel/descripcionNoi-.jpg" class="img-fluid">'+
            '<img src="vista/MDB v4.14.1/img/aspel/noiCosto_2023.jpg" class="img-fluid">';
            break;
        case 8:
             img = '<img src="vista/MDB v4.14.1/img/aspel/descripcionProd.jpg" class="img-fluid">'+
             '<img src="vista/MDB v4.14.1/img/aspel/prodCosto_2023.jpg" class="img-fluid">';
            break;
        case 9:
            img = '<img src="vista/MDB v4.14.1/img/aspel/descripcionNube.jpg" class="img-fluid">'+
            '<img src="vista/MDB v4.14.1/img/aspel/nubeCosto.jpg" class="img-fluid">';
            break;
    }

    $('#contenidoAspel').html(img);
    document.getElementsByTagName("html")[0].style.overflowY = "hidden";
  }