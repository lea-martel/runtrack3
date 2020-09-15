var citation = ["Tous ces moments se perdront dans l'oubli, comme des larmes dans la pluie, T'endors pas, c'est l'heure de mourir, C'est dommage qu'elle doive mourir, mais on en est tous là !"]


$(document).ready(function() {
    var imgId = 0
    var numberOfImages = 1;
    setInterval(function() {
    $(".jumbotron").css('background-image','url('../img/slider' + 'imgId' + '.jpg')');;
    imgId = (imgId + 1) % numberOfImages;
  }, 2000);
});