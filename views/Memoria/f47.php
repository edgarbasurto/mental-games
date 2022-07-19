<?php
require_once VIEW_PATH . 'Templates/headMain.php'
?>
<link rel="stylesheet" type="text/css" href="assets/css/estiloMemoria.css">
<style>
  .contenido-juego {
		max-width: 400px;
		height: 500px;
	}

	.item-cuadro {
		width: 150px;
		height: 150px;
		position: absolute;
		border: 8px black solid;
		border-radius: 10px;
	}

	.pos1 {
		top: 15%;
		left: 30px;
	}

	.pos2 {
		top: 30%;
		left: 30%;
	}

	.pos3 {
		top: 15%;
		right: 35%;
	}

	.pos4 {
		top: 25%;
		right: 10%;
	}

	.pos5 {
		bottom: 25%;
		left: 15%;
	}

	.pos6 {
		bottom: 10%;
		left: 40%;
	}
	.pos7 {
		bottom: 30%;
		right: 30%;
	}
	.pos8 {
		bottom: 10%;
		right: 20px;
	}
	@media screen and (max-width: 981px) {

		.item-cuadro {
			margin-top: 120px;
			width: 100px;
			height: 100px;
		}
	}
</style>



</head>

<body>

    <?php
    include_once VIEW_PATH . 'Templates/headerGames.php'
    ?>

    <div class="container">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title">Recuerda qué objetos había y en qué lugar se encontraban. Rellena los cuadros
                            correspondientes con el nombre del objeto.
                        </h4>
                    </div>
                    <div class="draggable-elements">
                        <i class="draggable" draggable="true" id="box1">Anillo</i>
                        <i class="draggable" draggable="true" id="box2">Aretes</i>
                        <i class="draggable" draggable="true" id="box1">Gafas</i>
                        <i class="draggable" draggable="true" id="box2">Cierre</i>
                    </div>



                </div>
            </div>

            <div class="card-body">

                <div class="contenido-juego ">
                    <div class="droppable-elements item-cuadro pos1">
                        <div class="droppable" id="caja1"></div>
                    </div>
                    <div class="droppable-elements item-cuadro pos2">
                        <div class="droppable" id="caja2"></div>
                    </div>
                    <div class="droppable-elements item-cuadro pos3">
                        <div class="droppable" id="caja3"></div>
                    </div>
                    <div class="droppable-elements item-cuadro pos4">
                        <div class="droppable" id="caja4"></div>
                    </div>
                    <div class="droppable-elements item-cuadro pos5">
                        <div class="droppable" id="caja5"></div>
                    </div>
                    <div class="droppable-elements item-cuadro pos6">
                        <div class="droppable" id="caja6"></div>
                    </div>
                    <div class="droppable-elements item-cuadro pos7">
                        <div class="droppable" id="caja7"></div>
                    </div>
                    <div class="droppable-elements item-cuadro pos8">
                        <div class="droppable" id="caja8"></div>
                    </div>




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
    <script src="assets/js/scriptF47.js"></script>
</body>

</html>