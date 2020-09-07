function sommenombrespremiers(nombre1, nombre2)
{
	var prem = false;
	for (var i = 2; i < nombre1; i++)
	{
		if (nombre1 % i ===0) {
			return false;
		}
	}
	for (var i2 = 2; i2 < nombre2; i2++)
	{
		if (nombre2 % i2 ===0) {
			return false;
		}
	}
	return nombre1 + nombre2;
}
window.onload = function()
{
	console.log(sommenombrespremiers(2, 1));
}
