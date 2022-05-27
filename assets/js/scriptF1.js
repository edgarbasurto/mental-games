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



//seleccinar y sombrea
for (let index = 0; index < items.length; index++) {
	const element = items[index];
	element.addEventListener('click', function () {
		if (element.style.background !== "rgba(100, 149, 237, 0.2)") {
			element.style.background = "rgba(100, 149, 237, 0.2)";
			element.style.boxShadow = '0 0 10px #44f';
			if (element.id === "frt5") {
				aciertos++;
				document.getElementById("puntos").innerHTML = "<b>PUNTOS: " + aciertos
					+ "/4</b>   ";
			}
			if (element.id !== "frt5") {
				errores++;
			}
		} else {
			element.style.background = null;
			element.style.boxShadow = null;
			if (element.id === "frt5") {
				aciertos--;
				document.getElementById("puntos").innerHTML = "<b>PUNTOS: " + aciertos
					+ "/4</b>   ";
			}
			if (element.id !== "frt5") {
				errores--;
			}
		}

	})

}


function pausarConteo() {
	clearInterval(a);
	if (aciertos === 4 && errores === 0) {
		document.getElementById("puntaje").innerHTML = "<b>¡NIVEL COMPLETADO!</b>";
		alert ('<%Session["Atencion1"] = " Completado "; %>');
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

class Fruta {
	constructor (nombre, ruta, id, clase) {
	  this.nombre = nombre;
	  this.ruta = ruta;
	  this.id = id;
	  this.clase = clase;
	}
}


var pera = '<div class="col-3"> <img alt="fruta" src="assets/imagenes/m5/m5-01.png" id="frt1" class="itemM5"> </div>';
var zapato = document.createElement('img');
var mariposa = document.createElement('img');
var llave = document.createElement('img');
var banana = document.createElement('img');

window.onload = function ()  {
	var contenedor = document.getElementsByClassName('card-body');
	var filas = document.getElementsByClassName('filaPanelJuego');

	
	for (let index = 0; index < 5; index++) {
		const element = filas[index];
		// element.appendChild(pera);
	}

	
};