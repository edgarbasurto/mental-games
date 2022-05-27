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

					<i class="draggable" draggable="true" id="box1">un</i>
					<i class="draggable" draggable="true" id="box2">roto</i>
					<i class="draggable" draggable="true" id="box3">he</i>
					<i class="draggable" draggable="true" id="box4">vaso</i>

				</div>

				<div class="droppable-elements">
					1. Frase:
					<div class="droppable" id="caja1"></div>
				</div>

				<div class="draggable-elements">

					<i class="draggable" draggable="true" id="box5">un</i>
					<i class="draggable" draggable="true" id="box6">beso</i>
					<i class="draggable" draggable="true" id="box7">darte</i>
					<i class="draggable" draggable="true" id="box8">quiero</i>

				</div>

				<div class="droppable-elements">
					2. Frase:
					<div class="droppable" id="caja2"></div>

				</div>

				<div class="draggable-elements">

					<i class="draggable" draggable="true" id="box9">yo</i>
					<i class="draggable" draggable="true" id="box10">cocino</i>
					<i class="draggable" draggable="true" id="box11">sal</i>
					<i class="draggable" draggable="true" id="box12">sin</i>

				</div>

				<div class="droppable-elements">
					3. Frase:
					<div class="droppable" id="caja3"></div>

				</div>

				<div class="draggable-elements">

					<i class="draggable" draggable="true" id="box13">nudo</i>
					<i class="draggable" draggable="true" id="box14">desataré</i>
					<i class="draggable" draggable="true" id="box15">te</i>
					<i class="draggable" draggable="true" id="box16">el</i>

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
	<script src="assets/js/scriptF27.js"></script>
</body>

</html>