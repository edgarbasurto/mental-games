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
				<h4 class="card-title">Selecciona la palabra que sobra:</h4>
			</div>
			<div class="card-body row text-center">

				<div class="col text-center card">
					<div id="item23-1" class="row mb-2" onClick="cambiaColor(this)">
						<h4>Rugoso</h4>
					</div>
					<div id="item23-2" class="row mb-2" onClick="cambiaColor(this)">
						<h4>Áspero</h4>
					</div>
					<div id="item23-3" class="row mb-2" onClick="cambiaColor(this)">
						<h4>Tenaz</h4>
					</div>
					<div id="item23-4" class="row mb-2" onClick="cambiaColor(this)">
						<h4>Liso</h4>
					</div>
					<div id="item23-5" class="row mb-2" onClick="cambiaColor(this)">
						<h4>Suave</h4>
					</div>
				</div>

				
				<div class="col text-center card">
					<div id="item23-6" class="row mb-2" onClick="cambiaColor(this)">
						<h4>Enredo</h4>
					</div>
					<div id="item23-7" class="row mb-2" onClick="cambiaColor(this)">
						<h4>Lío</h4>
					</div>
					<div id="item23-8" class="row mb-2" onClick="cambiaColor(this)">
						<h4>Confusión</h4>
					</div>
					<div id="item23-9" class="row mb-2" onClick="cambiaColor(this)">
						<h4>Carácter</h4>
					</div>
					<div id="item23-10" class="row mb-2" onClick="cambiaColor(this)">
						<h4>Embrollo</h4>
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


	<script src="assets/js/scriptF23.js"></script>
</body>

</html>