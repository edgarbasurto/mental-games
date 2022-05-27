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

                    <i class="draggable" draggable="true" id="box1">ella</i>
                    <i class="draggable" draggable="true" id="box2">billete</i>
                    <i class="draggable" draggable="true" id="box3">encontró</i>
                    <i class="draggable" draggable="true" id="box4">se</i>
                    <i class="draggable" draggable="true" id="box5">en</i>
                    <i class="draggable" draggable="true" id="box6">la</i>
                    <i class="draggable" draggable="true" id="box7">calle</i>
                    <i class="draggable" draggable="true" id="box8">un</i>

                </div>

                <div class="droppable-elements">
                    1. Frase:
                    <div class="droppable" id="caja1"></div>


                </div>

                <div class="draggable-elements">


                    <i class="draggable" draggable="true" id="box9">Noelia</i>
                    <i class="draggable" draggable="true" id="box10">lleva</i>
                    <i class="draggable" draggable="true" id="box11">un</i>
                    <i class="draggable" draggable="true" id="box12">seda</i>
                    <i class="draggable" draggable="true" id="box13">india</i>
                    <i class="draggable" draggable="true" id="box14">delicado</i>
                    <i class="draggable" draggable="true" id="box15">pañuelo</i>
                    <i class="draggable" draggable="true" id="box16">de</i>

                </div>

                <div class="droppable-elements">
                    2. Frase:
                    <div class="droppable" id="caja2"></div>


                </div>

                <div class="draggable-elements">


                    <i class="draggable" draggable="true" id="box17">el</i>
                    <i class="draggable" draggable="true" id="box18">barco</i>
                    <i class="draggable" draggable="true" id="box19">Santander</i>
                    <i class="draggable" draggable="true" id="box20">señor</i>
                    <i class="draggable" draggable="true" id="box21">tiene</i>
                    <i class="draggable" draggable="true" id="box22">en</i>
                    <i class="draggable" draggable="true" id="box23">un</i>
                    <i class="draggable" draggable="true" id="box24">Luis</i>
                </div>

                <div class="droppable-elements">
                    3. Frase:
                    <div class="droppable" id="caja3"></div>


                </div>

                <div class="draggable-elements">


                    <i class="draggable" draggable="true" id="box25">en</i>
                    <i class="draggable" draggable="true" id="box26">la</i>
                    <i class="draggable" draggable="true" id="box27">mercadillo</i>
                    <i class="draggable" draggable="true" id="box28">plaza</i>
                    <i class="draggable" draggable="true" id="box29">del</i>
                    <i class="draggable" draggable="true" id="box30">hay</i>
                    <i class="draggable" draggable="true" id="box31">un</i>
                    <i class="draggable" draggable="true" id="box32">pueblo</i>
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
    <script src="assets/js/scriptF31.js"></script>
</body>

</html>