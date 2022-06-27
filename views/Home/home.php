<!DOCTYPE html>
<html>

<head>
    <title>Mental Games</title>
    <meta charset="utf-8">
    <meta name="description" content="Esto es un juego web orientado a la estimulacion cognitiva para adultos">
    <meta name="author" content="Jacqueline Heras">
    <link rel="icon" href="assets/imagenes/mentalgame.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/estiloindex.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Noto+Serif:400,700" rel="stylesheet" type="text/css">
    <link href="assets/fonts/style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="text-center">

    <!-- <div class="splash">
            <h1 class="fade-in">Bienvenido a</h1>
        </div>
        <div class="splash2">
            <h1 class="fade-in2">MENTAL GAMES</h1>
        </div> -->

    <?php
    include_once VIEW_PATH . 'Templates/headerIndex.php'
    ?>


    <div class="title">
        <h1 class="titPrinc mt-5 mt-lg-1">ESTIMULACIÓN COGNITIVA PARA ADULTOS MAYORES</h1>
    </div>
    <!-- <div class="imgCentro text-center"> -->
        <img class="img2 text-center px-0 px-lg-5" alt="Juegos Mentales - Por Lcda. Jacqueline Heras S." src="assets/imagenes/mental_games.png">
    <!-- </div> -->
    <div class="text-center mt-5 mt-lg-1">
        <a class="btn btn-primary" href="?c=usuario">INICIAR</a>
    </div>


    <div id="openModal" class="modalDialog">
        <div>
            <a href="#close" title="Close" class="close">X</a>
            <h2>OBJETIVOS</h2>
            <p>Estas actividades están enfocadas a mejorar y mantener la
                capacidad de concentración y atención de la persona en todas sus
                modalidades: atención focalizada, sostenida, selectiva, alternante y
                dividida; orientación espacial de la atención, nivel de alerta y
                atención ejecutiva.</p>
        </div>
    </div>

    <footer>
        <p class="footer">
            <b>© Derechos Reservados a Lcda. Jacqueline Heras / Guayaquil -
                Ecuador</b>
        </p>
    </footer>
        <script src="assets/js/scriptIndex.js"></script>
        <script src="https://kit.fontawesome.com/2008d37923.js" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>


</body>

</html>