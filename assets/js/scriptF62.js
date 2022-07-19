var seg = 0;
var min = 0;

var id = null;
var aciertos = 0;
var errores = 0;


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

function reset() {
    aciertos = 0;
    errores = 0;
    document.getElementById("puntaje2").innerHTML = "";
    document.getElementById("puntaje").innerHTML = "";
    document.getElementById("aciertos").innerHTML = "ACIERTOS: " + aciertos;
    document.getElementById("errores").innerHTML = "ERRORES: " + errores;
}
function pausarConteo() {
    clearInterval(a);
    var total1 = document.getElementById("total1").value;
    var total2 = document.getElementById("total2").value;
    if (total1 == 35) {
        aciertos++;
        if (total2 == 38) {
            document.getElementById("puntaje").innerHTML = "<b>¡NIVEL COMPLETADO!</b>";
            aciertos++;
            errores = 0;
        } else {
            document.getElementById("puntaje2").innerHTML = "<b>¡VUELVE A INTENTARLO!</b>";
        }

        errores = 0;
    } else {
        if (total2 == 38) {
            document.getElementById("puntaje2").innerHTML = "<b>¡VUELVE A INTENTARLO!</b>";
            aciertos++;
            errores = 0;
        } else {
            document.getElementById("puntaje2").innerHTML = "<b>¡VUELVE A INTENTARLO!</b>";
            errores = 2;
            aciertos = 0;
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



