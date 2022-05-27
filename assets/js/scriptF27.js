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
		//validar frase 1
		var caja1 = document.querySelectorAll("#caja1 i");
		var frase1 = "";
		caja1.forEach(element => {
			frase1 += element.textContent + " ";
		});

		if (frase1 == "he roto un vaso ") {
			document.getElementById("caja1").innerHTML += "<p style='color: green;'>¡CORRECTO!</p>";
			aciertos++;
		} else {
			document.getElementById("caja1").innerHTML += "<p style='color: red;'>¡INCORRECTO!</p>";
			errores++;
		}
	
		//validar frase 2
		var caja2 = document.querySelectorAll("#caja2 i");
		var frase2 = "";
		caja2.forEach(element => {
			frase2 += element.textContent + " ";
		});
		if (frase2 == "quiero darte un beso ") {
			document.getElementById("caja2").innerHTML += "<p style='color: green;'>¡CORRECTO!</p>";
			aciertos++;
		} else {
			document.getElementById("caja2").innerHTML += "<p style='color: red;'>¡INCORRECTO!</p>";
			errores++;
		}
		
		//validar frase 3
		var caja3 = document.querySelectorAll("#caja3 i");
		var frase3 = "";
		caja3.forEach(element => {
			frase3 += element.textContent + " ";
		});
		if (frase3 == "yo cocino sin sal ") {
			document.getElementById("caja3").innerHTML += "<p style='color: green;'>¡CORRECTO!</p>";
			aciertos++;
		} else {
			document.getElementById("caja3").innerHTML += "<p style='color: red;'>¡INCORRECTO!</p>";
			errores++;
		}

		//validar frase 4
		var caja4 = document.querySelectorAll("#caja4 i");
		var frase4 = "";
		caja4.forEach(element => {
			frase4 += element.textContent + " ";
		});
		if (frase4 == "te desataré el nudo ") {
			document.getElementById("caja4").innerHTML += "<p style='color: green;'>¡CORRECTO!</p>";
			aciertos++;
		} else {
			document.getElementById("caja4").innerHTML += "<p style='color: red;'>¡INCORRECTO!</p>";
			errores++;
		}
		




		if (aciertos === 4 && errores === 0) {
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
