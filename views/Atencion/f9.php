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
                    <div class="col p-0 itemF9">f</div>
                    <div class="col p-0 itemF9">g</div>
                    <div class="col p-0 itemF9" id="correct">u</div>
                    <div class="col p-0 itemF9">n</div>
                    <div class="col p-0 itemF9">m</div>
                    <div class="col p-0 itemF9">h</div>
                    <div class="col p-0 itemF9" id="correct">u</div>
                    <div class="col p-0 itemF9">v</div>
                </div>
                <div class="row mb-2 mx-0 mx-lg-3 p-0 py-2 border rounded">
                    <div class="col p-0 itemF9" id="correct">r</div>
                    <div class="col p-0 itemF9">t</div>
                    <div class="col p-0 itemF9">x</div>
                    <div class="col p-0 itemF9">s</div>
                    <div class="col p-0 itemF9" id="correct">r</div>
                    <div class="col p-0 itemF9">j</div>
                    <div class="col p-0 itemF9">k</div>
                    <div class="col p-0 itemF9">ñ</div>
                </div>
                <div class="row mb-2 mx-0 mx-lg-3 p-0 py-2 border rounded">
                    <div class="col p-0 itemF9">q</div>
                    <div class="col p-0 itemF9">g</div>
                    <div class="col p-0 itemF9">b</div>
                    <div class="col p-0 itemF9">d</div>
                    <div class="col p-0 itemF9" id="correct">p</div>
                    <div class="col p-0 itemF9">t</div>
                    <div class="col p-0 itemF9">ñ</div>
                    <div class="col p-0 itemF9" id="correct">p</div>
                </div>
                <div class="row mb-2 mx-0 mx-lg-3 p-0 py-2 border rounded">
                    <div class="col p-0 itemF9" id="correct">x</div>
                    <div class="col p-0 itemF9">z</div>
                    <div class="col p-0 itemF9">s</div>
                    <div class="col p-0 itemF9">r</div>
                    <div class="col p-0 itemF9">h</div>
                    <div class="col p-0 itemF9">u</div>
                    <div class="col p-0 itemF9" id="correct">x</div>
                    <div class="col p-0 itemF9">n</div>
                </div>
                <div class="row mb-2 mx-0 mx-lg-3 p-0 py-2 border rounded">
                    <div class="col p-0 itemF9">s</div>
                    <div class="col p-0 itemF9" id="correct">a</div>
                    <div class="col p-0 itemF9">e</div>
                    <div class="col p-0 itemF9" id="correct">a</div>
                    <div class="col p-0 itemF9">u</div>
                    <div class="col p-0 itemF9">d</div>
                    <div class="col p-0 itemF9">o</div>
                    <div class="col p-0 itemF9">i</div>
                </div>
                <div class="row mb-2 mx-0 mx-lg-3 p-0 py-2 border rounded">
                    <div class="col p-0 itemF9" >z</div>
                    <div class="col p-0 itemF9" >s</div>
                    <div class="col p-0 itemF9" >d</div>
                    <div class="col p-0 itemF9" id="correct">c</div>
                    <div class="col p-0 itemF9" >o</div>
                    <div class="col p-0 itemF9" >p</div>
                    <div class="col p-0 itemF9" >h</div>
                    <div class="col p-0 itemF9" id="correct">c</div>
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

    <script src="assets/js/scriptF13.js"></script>
</body>

</html>