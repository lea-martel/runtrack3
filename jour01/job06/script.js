function fizzbuzz()
{
    var nombre_depart = 0;
    var nombre_arrivee = 151;
    var est_divisible_par = 3;
    var est_divisible_pars = 5;
    while (nombre_depart <= nombre_arrivee) {
        if (nombre_depart % est_divisible_par === 0 && nombre_depart % est_divisible_pars === 0 && nombre_depart != 0) {
            console.log('FizzBuzz');
        }

        if (nombre_depart % est_divisible_par === 0 && nombre_depart!= 0) {
            console.log('Fizz') ;
        }
        if (nombre_depart% est_divisible_pars === 0 && nombre_depart !=0) {
            console.log('Buzz') ;
        }
        else
        {
            console.log(nombre_depart);
        }

    nombre_depart++;
}
document.getElementById("reponse");
}
window.onload = function()
{
    fizzbuzz();
}