var images = ['arc1.png','arc2.png','arc3.png','arc4.png','arc5.png','arc6.png'];
let images = document.getElementById("button");
for( i = 0; i < 6; i++){
    // creation de l'element image
    oImage = document.createElement('img');
    // affectation du nom de l'image
    oImage.src = t[i];
    for (var i = 0; i < n; i++) {
        var image = new Image();
        image.src = 'image/allumette.gif';
        images.push(image);
    }


function randomize(tab) {
    var i, j, tmp;
    for (i = tab.length - 1; i > 0; i--) {
        j = Math.floor(Math.random() * (i + 1));
        tmp = tab[i];
        tab[i] = tab[j];
        tab[j] = tmp;
    }
    return tab;
}
var tab = [9, 4, 12, 3, 10];
tab = randomize(tab);
console.log(tab);