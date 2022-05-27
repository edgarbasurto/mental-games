<?php
require_once VIEW_PATH . 'Templates/headMain.php'
?>
</head>

<body>
	<?php
	include_once VIEW_PATH . 'Templates/headerGames.php'
	?>


	<h1 class="tituloContenido">TALLERES</h1>
	<p class="indicaciones">Acceda a cualquier taller con un click</p>
	<div class="indiceContenido">

		<div class="talleresFila">

			<div class="contenedorBotonTaller">

				<div class="icon">
					<a href="?c=atencion"><span class="icon-icono-01"></span></a>
				</div>

				<div class="button">
					<a href="?c=atencion"><b>Atención</b></a>
				</div>
				Actividades enfocadas a mejorar <br>y mantener la apacidad de <br>concentración.


			</div>

			<div class="contenedorBotonTaller">
				<div class="icon">
					<a href="?c=ejecutivas"><span class="icon-icono-02"></span></a>
				</div>
				<div class="button">
					<a href="?c=ejecutivas"><b>Funciones ejecutivas</b></a>
				</div>
				Actividades que estimula las
				<br>facultades cognitivas de
				<br> razonamiento, control
				<br>atencional y toma de
				<br> decisiones.
			</div>
			<div class="contenedorBotonTaller">
				<div class="icon">
					<a href="?c=lenguaje"><span class="icon-icono-04"></span></a>
				</div>

				<div class="button">
					<a href="?c=lenguaje"><b>Lenguaje</b></a>
				</div>
				Actividades para entrenar la
				<br> capacidad comunicativa tanto
				<br> expresiva como comprensiva.
			</div>


		</div>

		<div class="talleresFila">
			<div class="contenedorBotonTaller">
				<div class="icon">
					<a href="?c=memoria"><span class="icon-icono-03"></span></a>
				</div>
				<div class="button">
					<a href="?c=memoria"><b>Memoria</b></a>
				</div>
				Actividades enfocadas a <br>mejorar la capacidad <br>de memoria.
			</div>
			<div class="contenedorBotonTaller">
				<div class="icon">
					<a href="?c=percepcion"><span class="icon-icono-05"></span></a>
				</div>
				<div class="button">
					<a href="?c=percepcion"><b>Percepción</b></a>
				</div>
				Actividades que estimulan <br>la capacidad para identificar <br>los objetos del entorno.
			</div>
			<div class="contenedorBotonTaller">
				<div class="icon">
					<a href="#"><span class="icon-icono-06"></span></a>
				</div>
				<div class="button">
					<a href="#"><b>Lectoescritura y Visoconstrucción</b></a>
				</div>
				Actividades que estimulan <br>la capacidad cognitiva <br>integral de la persona.
			</div>
		</div>
	</div>

	<?php
	include_once VIEW_PATH . 'Templates/footer.php'
	?>
</body>

</html>