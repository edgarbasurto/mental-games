var seg = 0;
var min = 0;
var select = false;
var id = null;
var aciertos = 0;
var errores = 0;
var objetos = [];

var items = document.querySelectorAll('.itemM5');

a = setInterval(sumarTiempo, 1000);

function sumarTiempo() {
	if (seg < 59) {
		seg++;
	} else {
		min++;
		seg = 0;
	}
	showTime("tiempo");
}


function pausarConteo() {
	clearInterval(a);
    var total = document.getElementById("total").value;
     console.log(total);
	if (total == 8) {
		document.getElementById("puntaje").innerHTML = "<b>¡NIVEL COMPLETADO!</b>";
        aciertos++;
        errores=0;
	} else {
			document.getElementById("puntaje2").innerHTML = "<b>¡VUELVE A INTENTARLO!</b>";
            errores++;
            aciertos=0;
		}
	
	// tiempo
	showTime("time");

	document.getElementById("aciertos").innerHTML = "ACIERTOS: " + aciertos;
	document.getElementById("errores").innerHTML = "ERRORES: " + errores;
}

function showTime(id) {
	if (seg < 10 && min < 10) {
		document.getElementById(id).innerHTML = "TIEMPO 0" + min
			+ ":0" + seg;
	}
	if (seg >= 10 && min >= 10) {
		document.getElementById(id).innerHTML = "TIEMPO " + min + ":"
			+ seg;
	}
	if (seg < 10 && min >= 10) {
		document.getElementById(id).innerHTML = "TIEMPO " + min + ":0"
			+ seg;
	}
	if (seg >= 10 && min < 10) {
		document.getElementById(id).innerHTML = "TIEMPO 0" + min + ":"
			+ seg;
	}
}



