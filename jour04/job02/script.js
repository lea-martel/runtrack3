var plate = '{"name":"La Plateforme_", "addresse": "8 rue d\'hozier", "city": "Marseille", "nb_staff": "11", "creation":"2019"}';
var keyout = 'city';

function jsonValueKey(string, key) {
var obj = JSON.parse(string);
return obj[key];

}

console.log(jsonValueKey(plate, keyout))