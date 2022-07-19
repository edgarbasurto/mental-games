var seg = 0;
var min = 0;
var aciertos = 0;
var errores = 0;
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
	//validar resultado
	//caja1
	var frase1 = document.getElementById("caja1").textContent;
	console.log(frase1);

	if (frase1 == "Minifalda" || frase1 == "Guantes") {
		document.getElementById("caja1").innerHTML += "<p style='color: red;'>¡INCORRECTO!</p>";
		errores++;
	}
	//caja2
    var frase2 = document.getElementById("caja2").textContent;
	console.log(frase2);

	if (frase2 == "Minifalda" || frase2 == "Guantes") {
		document.getElementById("caja2").innerHTML += "<p style='color: red;'>¡INCORRECTO!</p>";
		errores++;
	}
	//caja3
	var frase3 = document.getElementById("caja3").textContent;
	console.log(frase3);

	if (frase3 == "Minifalda" || frase3 == "Guantes") {
		document.getElementById("caja3").innerHTML += "<p style='color: red;'>¡INCORRECTO!</p>";
		errores++;
	}
	//caja4
	var frase4 = document.getElementById("caja4").textContent;
	console.log(frase4);

	if (frase4 == "Minifalda") {
		document.getElementById("caja4").innerHTML += "<p style='color: green;'>¡CORRECTO!</p>";
		aciertos++;
	} else {
        if (frase4 == "Guantes") {
        document.getElementById("caja4").innerHTML += "<p style='color: red;'>¡INCORRECTO!</p>";
		errores++;
        }
    }
	//caja5
	var frase5 = document.getElementById("caja5").textContent;
	console.log(frase5);

	if (frase5 == "Guantes") {
		document.getElementById("caja5").innerHTML += "<p style='color: green;'>¡CORRECTO!</p>";
		aciertos++;
	} else {
        if (frase5 == "Minifalda") {
        document.getElementById("caja5").innerHTML += "<p style='color: red;'>¡INCORRECTO!</p>";
		errores++;
        }
    }




	if (aciertos === 2 && errores === 0) {
		document.getElementById("puntaje").innerHTML = "<b style='color: green;'>¡NIVEL COMPLETADO!</b>";
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

function showTime(id) {
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
