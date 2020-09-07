var currentJour = 'lundi';
var currentI = -1;
function afficherjourssemaines() {
    var jourssemaines = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
    for (var i = 0; i < jourssemaines.length; i++) {
        var day = jourssemaines[i];
        if(currentJour === day)
        {
            currentI++;
        }
        if(currentI === jourssemaines.length)
        {
            currentI = 0;
            currentJour = 'lundi';
        }
        if(currentI === i)
        {
            currentJour = day;
        }
    }
    document.getElementById('result').innerHTML = currentJour;
}document.getElementById('button').addEventListener('click',function(){afficherjourssemaines()})