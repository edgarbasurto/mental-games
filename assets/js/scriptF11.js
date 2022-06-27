var seg = 0;
var min = 0;
var select = false;
var id = null;
var aciertos = 0;
var errores = 0;
var objetos = [];

var items = document.querySelectorAll('.itemF7');

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
	if (aciertos === 5 && errores === 0) {
		document.getElementById("puntaje").innerHTML = "<b>¡NIVEL COMPLETADO!</b>";
	} else {
		if (aciertos === 0 && errores === 0) {
			document.getElementById("puntaje2").innerHTML = "<b>¡VUELVE A INTENTARLO!</b>";
		}
		if (aciertos >= 0 && errores >= 0) {
			document.getElementById("puntaje2").innerHTML = "<b>¡VUELVE A INTENTARLO!</b>";
		}
	}
	// tiempo
	showTime("time");
	
	document.getElementById("aciertos").innerHTML = "<b>ACIERTOS: " + aciertos
			+ "</b>";
	document.getElementById("errores").innerHTML = "<b>ERRORES: " + errores
			+ "</b>";
}

function showTime(id){
	if (seg < 10 && min < 10) {
		document.getElementById(id).innerHTML = "<b>TIEMPO 0" + min
				+ ":0" + seg + "</b>";
	}
	if (seg >= 10 && min >= 10) {
		document.getElementById(id).innerHTML = "<b>TIEMPO " + min + ":"
				+ seg + "</b>";
	}
	if (seg < 10 && min >= 10) {
		document.getElementById(id).innerHTML = "<b>TIEMPO " + min + ":0"
				+ seg + "</b>";
	}
	if (seg >= 10 && min < 10) {
		document.getElementById(id).innerHTML = "<b>TIEMPO 0" + min + ":"
				+ seg + "</b>";
	}	
}



for (let index = 0; index < items.length; index++) {
	const element = items[index];
	element.addEventListener('click', function () {
		if (element.style.background !== "rgba(100, 149, 237, 0.2)") {
			element.style.background = "rgba(100, 149, 237, 0.2)";
			element.style.boxShadow = '0 0 10px #44f';
			if (element.id === "correct") {
				aciertos+=0.5;
				document.getElementById("puntos").innerHTML = "<b>PUNTOS: " + aciertos
					+ "/5</b>   ";
			}
			if (element.id !== "correct") {
				errores+=1;
			}
		} else {
			element.style.background = null;
			element.style.boxShadow = null;
			if (element.id === "correct") {
				aciertos-=0.5;
				document.getElementById("puntos").innerHTML = "<b>PUNTOS: " + aciertos
					+ "/5</b>   ";
			}
			if (element.id !== "correct") {
				errores-=1;
			}
		}

	})

}