<?php
	require_once VIEW_PATH . 'Templates/headMain.php'
	?>
</head>

<body>

	<?php
	include_once VIEW_PATH . 'Templates/headerGames.php'
	?>

	<div class="container">
		<!-- <h1>FICHA #1</h1> -->
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-8">
						<h4 class="card-title">Selecciona todas las imagenes que encuentres como esta:</h4>
					</div>
					<div class="col-2">
						<img alt="fruta" src="assets/imagenes/m5/m5-05.png" class="item" id="frt5" style="height: 45px;">
					</div>
					<div class="col-2 text-end">
						
					</div>
				</div>

			</div>

			<div class="card-body">


				<div class="panelJuegoM5" id="player">
					<div class="row">
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-01.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-02.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-03.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-01.png" id="frt1" class="itemM5">
						</div>
					</div>
					<div class="row">

						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-03.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-01.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-04.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-05.png" id="frt5" class="itemM5">
						</div>

					</div>
					<div class="row">

						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-04.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-05.png" id="frt5" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-02.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-04.png" id="frt1" class="itemM5">
						</div>

					</div>
					<div class="row">

						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-05.png" id="frt5" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-04.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-03.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-02.png" id="frt1" class="itemM5">
						</div>

					</div>
					<div class="row">

						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-03.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-02.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-01.png" id="frt1" class="itemM5">
						</div>
						<div class="col-3">
							<img alt="fruta" src="assets/imagenes/m5/m5-05.png" id="frt5" class="itemM5">
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

	<script src="assets/js/scriptF1.js"></script>
</body>

</html>