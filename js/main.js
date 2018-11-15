var api = 'AIzaSyCeSzprwFmUOSsAIf36sT9hONLvf3ReD_4';


function initMap() {
  var latLng = {
    lat: 20.6772885,
    lng:-103.3856328
  };

  var map = new google.maps.Map(document.getElementById('mapa'), {
    'center':  latLng,
    'zoom': 14,
    'mapTypeId': google.maps.MapTypeId.ROADMAP
  });

  var contenido = '<h2>IFTS N°4</h2>';

  var informacion = new google.maps.InfoWindow({
    content: contenido
  });

  var marker = new google.maps.Marker({
    position:latLng,
    map: map,
    title: 'IFTS N°4'
  });

  marker.addListener('click', function(){
    informacion.open(map, marker);
  });
}



$(function() {

    // filtro pagado no pagado

    $('#filtros a').on('click', function() {
      $('#filtros a').removeClass('activo');
      $(this).addClass('activo');
      $('.registrados tbody tr').hide();

      if( $(this).attr('id') =='pagados' ) {
        $('.registrados tbody tr.pagado').show();
      } else {
        $('.registrados tbody tr.no_pagado').show();
      }

      return false;
    });

    // Lettering
    //$('.nombre-sitio').lettering();

    // Agregar clase a Menú
    $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
    $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
    $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');
    $('body.novedades .navegacion-principal a:contains("Novedades")').addClass('activo');

    // Menu fijo

    var windowHeight = $(window).height();
    var barraAltura = $('.barra').innerHeight();
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if(scroll > windowHeight) {
            $('.barra').addClass('fixed');
            $('body').css({'margin-top': barraAltura+'px'});
        } else {
          $('.barra').removeClass('fixed');
          $('body').css({'margin-top': '0px'});
        }
    });

    // Menu Responsive

    $('.menu-movil').on('click', function() {
        $('.navegacion-principal').slideToggle();
    });



    // Reaccionar a Resize en la pantalla
    var breakpoint = 768;
    $(window).resize(function() {
         if($(document).width() >= breakpoint){
           $('.navegacion-principal').show();
         } else {
           $('.navegacion-principal').hide();
         }
    });


    // Programa de Conferencias
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');

    $('.menu-programa a').on('click', function() {
          $('.menu-programa a').removeClass('activo');
          $(this).addClass('activo');
          $('.ocultar').hide();
          var enlace = $(this).attr('href');
          $(enlace).fadeIn(1000);
          return false;
    });

    // Animaciones para los Numeros
    var resumenLista = jQuery('.resumen-evento');
    if(resumenLista.length > 0 ) {
        $('.resumen-evento').waypoint(function() {
            $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6}, 1200);
            $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15}, 1200);
            $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3}, 1500);
            $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9}, 1500);
        }, {
            offset: '60%'
        });
    }

    // Colorbox

    $('.invitado-info').colorbox({inline:true, width:"50%"});
    $('.boton_newsletter').colorbox({inline:true, width:"50%"});
});
