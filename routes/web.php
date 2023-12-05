<?php
    function route($rota, $controlador) {
        if($_SERVER['REQUEST_URI'] == $rota) {
            header("Location: $controlador");
        }
        }

    route('/conexao', './models/conexao.php');

?>