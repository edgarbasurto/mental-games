<?php
require_once VIEW_PATH . 'Templates/headMain.php'
?>
</head>

<body>
	<?php
	include_once VIEW_PATH . 'Templates/headerGames.php'
	?>

	<div class="container">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Selecciona el objeto que sobra:</h4>
			</div>
			<div class="card-body row text-center">


				<div class="col">
					<div id="item21-1" class="itemM21" onClick="cambiaColor(this)">
						<img alt="imagen" src="assets/imagenes/m21/m21-01.png" class="imgM16">
						<h4>Lápiz</h4>
					</div>
				</div>

				<div class="col">
					<div id="item21-2" class="itemM21" onClick="cambiaColor(this)">
						<img alt="imagen" src="assets/imagenes/m21/m21-02.png" class="imgM16">
						<h4>Bolígrafo</h4>
					</div>

				</div>

				<div class="col">
					<div id="item21-3" class="itemM21" onClick="cambiaColor(this)">
						<img alt="imagen" src="assets/imagenes/m21/m21-03.png" class="imgM16">
						<h4>Jaula</h4>
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


	<script src="assets/js/scriptF21.js"></script>
</body>

</html>