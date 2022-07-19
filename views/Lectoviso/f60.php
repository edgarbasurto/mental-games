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
				<div class="row">
					<div class="col">
						<h4 class="card-title">¿Cuántas peras hay? Escribe el resultado en la casilla de abajo</h4>
					</div>
				</div>

			</div>

			<div class="card-body text-center">

				<div class="row">
					<div class="col-3">
						<img alt="fruta" src="assets/imagenes/m5/m5-01.png" id="frt1" class="itemM60">
					</div>
					<div class="col-3">
						<img alt="fruta" src="assets/imagenes/m5/m5-01.png" id="frt1" class="itemM60">
					</div>
					<div class="col-3">
						<img alt="fruta" src="assets/imagenes/m5/m5-01.png" id="frt1" class="itemM60">
					</div>
					<div class="col-3">
						<img alt="fruta" src="assets/imagenes/m5/m5-01.png" id="frt1" class="itemM60">
					</div>
				</div>
				<div class="row">

					<div class="col-3">
						<img alt="fruta" src="assets/imagenes/m5/m5-01.png" id="frt1" class="itemM60">
					</div>
					<div class="col-3">
						<img alt="fruta" src="assets/imagenes/m5/m5-01.png" id="frt1" class="itemM60">
					</div>
					<div class="col-3">
						<img alt="fruta" src="assets/imagenes/m5/m5-01.png" id="frt1" class="itemM60">
					</div>
					<div class="col-3">
						<img alt="fruta" src="assets/imagenes/m5/m5-01.png" id="frt5" class="itemM60">
					</div>

				</div>



				<div class="mb-3 row text-end">
					<div class="col"></div>
					<div class="col"></div>
					
					<label for="total" class="form-label col">TOTAL:</label>
					<input type="number" class="form-control col" name="total" id="total" aria-describedby="helpId" placeholder="">
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

	<script src="assets/js/scriptF60.js"></script>
</body>

</html>