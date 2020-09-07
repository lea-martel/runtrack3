function jourstravaille(date) {

    var joursferie = ['2020-01-01','2020-04-13','2020-05-01','2020-05-8','2020-05-21','2020-06-01','2020-07-14','2020-08-15','2020-11-01','2020-11-11','2020-12-25'];
    var txt = "";
    var render = renderDate(date);
    if (!joursferie.indexOf(date)){
        txt = "Le " + render + ' est un jour ferié ' ;
    }
    else if(test(date))
    {
        txt = "Non, " + render + " est un weekend";
    }
    else
    {
        txt = "Oui " + render + " est un jour travaillé";
    }
    return  txt;
}

function  renderDate(date) {
    var dateType = new Date(date);
    var y = new Intl.DateTimeFormat('fr', {year : 'numeric'}).format(dateType);
    var m = new Intl.DateTimeFormat('fr', {month : 'long'}).format(dateType);
    var d = new Intl.DateTimeFormat('fr', {weekday : 'long'}).format(dateType);
    var dInt = new Intl.DateTimeFormat('fr', {day : '2-digit'}).format(dateType);
    return d + ' ' + dInt + ' ' + m + ' ' + ' ' + y;
}
function test(date) {
    var dateType = new Date(date);
    var d = new Intl.DateTimeFormat('fr', {weekday : 'long'}).format(dateType);
    if(d === 'dimanche' || d === 'samedi')
    {
        return true;
    }
    return  false;
}
window.onload = function () {
    document.getElementById('result').innerHTML = jourstravaille('2020-03-02');
}
