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
                        <h4 class="card-title">Selecciona las imagenes que se repiten en cada fila:</h4>
                    </div>
                </div>

            </div>

            <div class="card-body text-center">
                <div class="row mb-2 mx-0 mx-lg-3 p-0 py-2 border rounded">
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-01.png" class="itemM5" id="correct">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-02.png" class="itemM5" id="obj1">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-03.png" class="itemM5" id="obj1">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-01.png" class="itemM5" id="correct">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-04.png" class="itemM5" id="obj1">
                    </div>
                </div>
                <div class="row mb-2 mx-0 mx-lg-3 p-0 py-2 border rounded">
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-05.png" class="itemM5" id="obj1">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-10.png" class="itemM5" id="correct">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-07.png" class="itemM5" id="obj1">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-08.png" class="itemM5" id="obj1">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-10.png" class="itemM5" id="correct">
                    </div>
                </div>
                <div class="row mb-2 mx-0 mx-lg-3 p-0 py-2 border rounded">
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-09.png" class="itemM5" id="obj1">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-05.png" class="itemM5" id="obj1">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-03.png" class="itemM5" id="correct">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-10.png" class="itemM5" id="obj1">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-03.png" class="itemM5" id="correct">
                    </div>
                </div>
                <div class="row mb-2 mx-0 mx-lg-3 p-0 py-2 border rounded">
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-08.png" class="itemM5" id="obj1">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-04.png" class="itemM5" id="correct">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-10.png" class="itemM5" id="obj1">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-04.png" class="itemM5" id="correct">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-11.png" class="itemM5" id="obj1">
                    </div>
                </div>
                <div class="row mb-2 mx-0 mx-lg-3 p-0 py-2 border rounded">
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-10.png" class="itemM5" id="obj1">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-07.png" class="itemM5" id="correct">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-03.png" class="itemM5" id="obj1">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-07.png" class="itemM5" id="correct">
                    </div>
                    <div class="col p-0">
                        <img alt="obj" src="assets/imagenes/m10/m10-01.png" class="itemM5" id="obj1">
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

    <script src="assets/js/scriptF10.js"></script>
</body>

</html>