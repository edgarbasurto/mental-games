<?php
require_once VIEW_PATH . 'Templates/headMain.php'
?>
<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
<link rel="stylesheet" type="text/css" href="assets/css/styleF27.css">
</head>

<body>
    <?php
    include_once VIEW_PATH . 'Templates/headerGames.php'
    ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Ordena las palabras para escribir una frase debajo:</h4>
            </div>
            <div class="card-body row">

                <div class="draggable-elements">

                    <i class="draggable" draggable="true" id="box1">hemos</i>
                    <i class="draggable" draggable="true" id="box2">de</i>
                    <i class="draggable" draggable="true" id="box3">parque</i>
                    <i class="draggable" draggable="true" id="box4">ido</i>
                    <i class="draggable" draggable="true" id="box5">paseo</i>
                    <i class="draggable" draggable="true" id="box6">por</i>
                    <i class="draggable" draggable="true" id="box7">el</i>

                </div>

                <div class="droppable-elements">
                    1. Frase:
                    <div class="droppable" id="caja1"></div>


                </div>

                <div class="draggable-elements">

                    <i class="draggable" draggable="true" id="box8">de</i>
                    <i class="draggable" draggable="true" id="box9">Juan</i>
                    <i class="draggable" draggable="true" id="box10">hermanos</i>
                    <i class="draggable" draggable="true" id="box11">hablado</i>
                    <i class="draggable" draggable="true" id="box12">con</i>
                    <i class="draggable" draggable="true" id="box13">he</i>
                    <i class="draggable" draggable="true" id="box14">los</i>
                </div>

                <div class="droppable-elements">
                    2. Frase:
                    <div class="droppable" id="caja2"></div>


                </div>

                <div class="draggable-elements">

                    <i class="draggable" draggable="true" id="box15">voy</i>
                    <i class="draggable" draggable="true" id="box16">en</i>
                    <i class="draggable" draggable="true" id="box17">verano</i>
                    <i class="draggable" draggable="true" id="box18">mudarme</i>
                    <i class="draggable" draggable="true" id="box19">a</i>
                    <i class="draggable" draggable="true" id="box20">de</i>
                    <i class="draggable" draggable="true" id="box21">piso</i>
                </div>

                <div class="droppable-elements">
                    3. Frase:
                    <div class="droppable" id="caja3"></div>


                </div>

                <div class="draggable-elements">

                    <i class="draggable" draggable="true" id="box22">Madrid</i>
                    <i class="draggable" draggable="true" id="box23">Alberto</i>
                    <i class="draggable" draggable="true" id="box24">trabaja</i>
                    <i class="draggable" draggable="true" id="box25">en</i>
                    <i class="draggable" draggable="true" id="box26">de</i>
                    <i class="draggable" draggable="true" id="box27">una</i>
                    <i class="draggable" draggable="true" id="box28">ferretería</i>
                </div>

                <div class="droppable-elements">
                    4. Frase:
                    <div class="droppable" id="caja4"></div>

                </div>

            </div>
            <div class="card-footer text-end">
                <button type="button" onclick="pausarConteo()" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Terminado <i class="fa-solid fa-play"></i>
                </button>
            </div>
        </div>

    </div>


    <?php
    include_once VIEW_PATH . 'Templates/modalPuntaje.php'
    ?>

    <?php
    include_once VIEW_PATH . 'Templates/footer.php'
    ?>

    <script src="assets/js/script-dragDrop.js"></script>
    <script src="assets/js/scriptF30.js"></script>
</body>

</html>