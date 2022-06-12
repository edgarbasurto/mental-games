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

                <div class="draggable-elements row">

                    <i class="draggable col" draggable="true" id="box1">me</i>
                    <i class="draggable col" draggable="true" id="box2">larga</i>
                    <i class="draggable col" draggable="true" id="box3">apetece</i>
                    <i class="draggable col" draggable="true" id="box4">una</i>
                    <i class="draggable col" draggable="true" id="box5">dormir</i>
                    <i class="draggable col" draggable="true" id="box6">siesta</i>
                </div>

                <div class="droppable-elements">
                    1. Frase:
                    <div class="droppable" id="caja1"></div>


                </div>

                <div class="draggable-elements row">

                    <i class="draggable col" draggable="true" id="box7">el</i>
                    <i class="draggable col" draggable="true" id="box8">está</i>
                    <i class="draggable col" draggable="true" id="box9">nubes</i>
                    <i class="draggable col" draggable="true" id="box10">de</i>
                    <i class="draggable col" draggable="true" id="box11">repleto</i>
                    <i class="draggable col" draggable="true" id="box12">cielo</i>
                </div>

                <div class="droppable-elements">
                    2. Frase:
                    <div class="droppable" id="caja2"></div>


                </div>

                <div class="draggable-elements row">

                    <i class="draggable col" draggable="true" id="box13">en</i>
                    <i class="draggable col" draggable="true" id="box14">tomamos</i>
                    <i class="draggable col" draggable="true" id="box15">fresca</i>
                    <i class="draggable col" draggable="true" id="box16">leche</i>
                    <i class="draggable col" draggable="true" id="box17">pueblo</i>
                    <i class="draggable col" draggable="true" id="box18">el</i>
                </div>

                <div class="droppable-elements">
                    3. Frase:
                    <div class="droppable" id="caja3"></div>


                </div>

                <div class="draggable-elements row">

                    <i class="draggable col" draggable="true" id="box19">muchos</i>
                    <i class="draggable col" draggable="true" id="box20">televisores</i>
                    <i class="draggable col" draggable="true" id="box21">estropeado</i>
                    <i class="draggable col" draggable="true" id="box22">la</i>
                    <i class="draggable col" draggable="true" id="box23">tormenta</i>
                    <i class="draggable col" draggable="true" id="box24">ha</i>
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
    <script src="assets/js/scriptF29.js"></script>
</body>

</html>