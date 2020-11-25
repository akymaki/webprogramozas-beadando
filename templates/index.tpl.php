<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <title>PCCC</title>
    <link rel="stylesheet" type="text/css" href="./styles/stilus.css">
    <?php
        if(file_exists('./styles/'.$keres['fajl'].'css')) { ?>
            <link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css">
    <?php } ?>
</head>
<body>

    <div id="wrapper">
        <?php include("./templates/pages/header.tpl.php"); ?>
        <?php include("./templates/pages/aside.tpl.php"); ?>
    </div>
    <div id="content">
        <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
    </div>
</body>
<footer>
    <hr>
    Támogatóink:<br>
    <br>
    <div class="row">
            <div class="thirdcolumn">
                <img src="./images/tamogatok/honda.gif" alt="" width=100% >
            </div>
            <div class="thirdcolumn">
                <img src="./images/tamogatok/stadler.png" alt="" width=100% >
            </div>
            <div class="thirdcolumn">
                <img src="./images/tamogatok/banyaib.gif" alt="" width=100% >
            </div>
    </div>
    <div class="row">
            <div class="thirdcolumn">
                <img src="./images/tamogatok/foldesi.gif" alt="" width=100% >
            </div>
            <div class="thirdcolumn">
                <img src="./images/tamogatok/szivek_logo.png" alt="" width=100% >
            </div>
            <div class="thirdcolumn">
                <img src="./images/tamogatok/sirenex.png" alt="" width=100% >
            </div>
    </div>
    <div class="row">
            <div class="thirdcolumn">
                <img src="./images/tamogatok/konyvbox.gif" alt="" width=100% >
            </div>
            <div class="thirdcolumn">
                <img src="./images/tamogatok/kerekparcentrum.gif" alt="" width=100% >
            </div>
            <div class="thirdcolumn">
                <img src="./images/tamogatok/breier.jpg" alt="" width=100% >
            </div>
    </div>
</footer>
</html>
