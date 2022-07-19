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

    if (frase1 == "Anillo") {
        document.getElementById("caja1").innerHTML += "<p style='color: green;'>¡CORRECTO!</p>";
        aciertos++;
    } else {
        if (frase1 == "Cierre" || frase1 == "Aretes" || frase1 == "Gafas") {
            document.getElementById("caja1").innerHTML += "<p style='color: red;'>¡INCORRECTO!</p>";
            errores++;
        }
    }
    //caja2
    var frase2 = document.getElementById("caja2").textContent;
    console.log(frase2);

    if (frase2 == "Aretes") {
        document.getElementById("caja2").innerHTML += "<p style='color: green;'>¡CORRECTO!</p>";
        aciertos++;
    } else {
        if (frase2 == "Anillo" || frase2 == "Cierre" || frase2 == "Gafas") {
            document.getElementById("caja2").innerHTML += "<p style='color: red;'>¡INCORRECTO!</p>";
            errores++;
        }
    }
    //caja3
    var frase3 = document.getElementById("caja3").textContent;
    console.log(frase3);

    if (frase3 == "Anillo" || frase3 == "Aretes" || frase3 == "Gafas" || frase3 == "Cierre") {
        document.getElementById("caja3").innerHTML += "<p style='color: red;'>¡INCORRECTO!</p>";
        errores++;
    }
    //caja4
    var frase4 = document.getElementById("caja4").textContent;
    console.log(frase4);

    if (frase4 == "Gafas") {
        document.getElementById("caja4").innerHTML += "<p style='color: green;'>¡CORRECTO!</p>";
        aciertos++;
    } else {
        if (frase4 == "Anillo" || frase4 == "Aretes" || frase4 == "Cierre") {
            document.getElementById("caja4").innerHTML += "<p style='color: red;'>¡INCORRECTO!</p>";
            errores++;
        }
    }
    //caja5
    var frase5 = document.getElementById("caja5").textContent;
    console.log(frase5);

    if (frase5 == "Anillo" || frase5 == "Aretes" || frase5 == "Gafas" || frase5 == "Cierre") {
        document.getElementById("caja5").innerHTML += "<p style='color: red;'>¡INCORRECTO!</p>";
        errores++;
    }

    //caja6
    var frase6 = document.getElementById("caja6").textContent;
    console.log(frase6);

    if (frase6 == "Anillo" || frase6 == "Aretes" || frase6 == "Gafas" || frase6 == "Cierre") {
        document.getElementById("caja6").innerHTML += "<p style='color: red;'>¡INCORRECTO!</p>";
        errores++;
    }

    //caja7
    var frase7 = document.getElementById("caja7").textContent;
    console.log(frase7);

    if (frase7 == "Anillo" || frase7 == "Aretes" || frase7 == "Gafas" || frase7 == "Cierre") {
        document.getElementById("caja7").innerHTML += "<p style='color: red;'>¡INCORRECTO!</p>";
        errores++;
    }
    //caja8
    var frase8 = document.getElementById("caja8").textContent;
    console.log(frase8);

    if (frase8 == "Cierre") {
        document.getElementById("caja8").innerHTML += "<p style='color: green;'>¡CORRECTO!</p>";
        aciertos++;
    } else {
        if (frase8 == "Anillo" || frase8 == "Aretes" || frase8 == "Gafas") {
            document.getElementById("caja8").innerHTML += "<p style='color: red;'>¡INCORRECTO!</p>";
            errores++;
        }
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
