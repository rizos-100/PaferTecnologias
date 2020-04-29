var current = 0;
var imagenes = new Array();
var numImages = 9;

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
            current = current+1;
        } else {
            current = 0;
        }
        
    $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
        
        return false;
    }); 

 });

 window.setInterval(function(){
    if (numImages > current + 3) {
        current = current+1;
    } else {
        current = 0;
    }
    
    $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
  },4000);


  function cambiarImg(num){
      var img = '';
    switch(num){
        case 1:
            img = '<img src="vista/MDB v4.14.1/img/aspel/saeCosto.JPG" class="img-fluid">';
            break;
        case 2:
            img = '<img src="vista/MDB v4.14.1/img/aspel/coiCosto.JPG" class="img-fluid">';
            break;
        case 3:
            img = '<img src="vista/MDB v4.14.1/img/aspel/bancosCosto.JPG" class="img-fluid">';
            break;
        case 4:
            img = '<img src="vista/MDB v4.14.1/img/aspel/admCosto.JPG" class="img-fluid">';
            break;
        case 5:
            img = '<img src="vista/MDB v4.14.1/img/aspel/factureCosto.JPG" class="img-fluid">';
            break;
        case 6:
           img = '<img src="vista/MDB v4.14.1/img/aspel/cajaCosto.JPG" class="img-fluid">';
           break;
        case 7:
            img = '<img src="vista/MDB v4.14.1/img/aspel/noiCosto.JPG" class="img-fluid">';
            break;
        case 8:
             img = '<img src="vista/MDB v4.14.1/img/aspel/prodCosto.JPG" class="img-fluid">';
            break;
    }

    $('#contenidoAspel').html(img);
  }