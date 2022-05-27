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
					<div id="item22-1" class="itemM21" onClick="cambiaColor(this)">
						<img alt="imagen" src="assets/imagenes/m22/m22-01.png" class="imgM16">
						<h4>Nevera</h4>
					</div>
				</div>

				<div class="col">
					<div id="item22-2" class="itemM21" onClick="cambiaColor(this)">
						<img alt="imagen" src="assets/imagenes/m22/m22-02.png" class="imgM16">
						<h4>Lavadora</h4>
					</div>

				</div>

				<div class="col">
					<div id="item22-3" class="itemM21" onClick="cambiaColor(this)">
						<img alt="imagen" src="assets/imagenes/m22/m22-03.png" class="imgM16">
						<h4>Dentrífico</h4>
					</div>
				</div>

				<div class="col">
					<div id="item22-4" class="itemM21" onClick="cambiaColor(this)">
						<img alt="imagen" src="assets/imagenes/m22/m22-04.png" class="imgM16">
						<h4>Televisor</h4>
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


	<script src="assets/js/scriptF22.js"></script>
</body>

</html>