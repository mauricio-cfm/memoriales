
//Configuramos el evento de carga de página, se ejecuta solamente 1 vez cuando la página cargo por completo
$("#ampliarmapa").click(function(){
  centraVentana();
  muestraVentana();
  loadMap();
  $('.mapBig .cerrar2').fadeIn('slow');

  //Agregamos el evento "click" del div: ventanaPopup1Cerrar
  $(".mapBig .cerrar2").click(function(){
    ocultaVentana();
  });
  
  $("#ventanaPopup1Cerrar").click(function(){
    ocultaVentana();
  });
  //Agregamos el evento "click" del div: ventanaPopup1Fondo
  $("#ventanaPopup1Fondo").click(function(){
    ocultaVentana();
  });
});
 
function centraVentana() {
    //Obtenemos ancho y alto del navegador, y alto y ancho de la popUp
    var windowWidth = document.documentElement.clientWidth;
    var windowHeight = document.documentElement.clientHeight;
    var popupHeight = $("#ventanaPopup1").height();
    var popupWidth = $("#ventanaPopup1").width();
    //centering
    $("#ventanaPopup1").css({
        "position": "absolute",
        "top": windowHeight/2-popupHeight/2,
        "left": windowWidth/2-popupWidth/2
    });
 
    //Solo se necesita para IE6
    $("#ventanaPopup1Fondo").css({
        "height": windowHeight
    });
}

function ocultaVentana() {
    $("#ventanaPopup1Fondo").fadeOut("slow");
    $("#ventanaPopup1").fadeOut("slow");
	$(".mapBig .cerrar2").fadeOut("slow");
}
 
function muestraVentana() {
    $("#ventanaPopup1Fondo").css({
        "opacity": "0.7"
    });
    $("#ventanaPopup1Fondo").fadeIn("slow");
    $("#ventanaPopup1").fadeIn("slow");
}