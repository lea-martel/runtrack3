window.onscroll = function() {color()};

function color() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  var bar = document.getElementById("myBar");
  document.getElementById("myBar").style.width = scrolled + "%"

  var color1 = 300 - scrolled;
  var color2 = 80 + scrolled;
  var color3 = 0 + scrolled;
  bar.style.backgroundColor = 'rgb(' + color1 + ', ' + color2 + ', ' + color3 + ')';}