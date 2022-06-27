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
						<h4 class="card-title">Selecciona las imágenes que se repiten:</h4>
					</div>
				</div>
			</div>

			<div class="card-body">
				<div class="panelJuegoM5" id="player">
					<div class="row">
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m11/m11-08.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m11/m11-01.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m6/m6-01.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m12/m12-02.png" id="correct" class="itemM5">
						</div>
					</div>
					<div class="row">

						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m11/m11-02.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m11/m11-09.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m12/m12-04.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-01.png" id="frt1" class="itemM5">
						</div>

					</div>
					<div class="row">

						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m10/m10-04.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m11/m11-04.png" id="frt5" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m11/m11-03.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m12/m12-01.png" id="frt1" class="itemM5">
						</div>

					</div>
					<div class="row">

						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m12/m12-03.png" id="frt5" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m12/m12-02.png" id="correct" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m11/m11-05.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m10/m10-01.png" id="frt1" class="itemM5">
						</div>

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

	<script src="assets/js/scriptF12.js"></script>
</body>

</html>