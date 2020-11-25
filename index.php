<?php
    include('./config/config.inc.php');

    $keres = $oldalak['/'];
    if (isset($_GET['oldal'])) {


        $oldal = $_GET['oldal'];
        if (isset($oldalak[$oldal]) && file_exists("./templates/pages/{$oldalak[$oldal]['fajl']}.tpl.php") ) {
            $keres = $oldalak[$oldal];
        }
        else {
            $keres = $hiba_oldal;
            header("HTTP/1.0 404 Not Found");
        }
    }

    include('./templates/index.tpl.php');
?>