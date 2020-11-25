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
    <?php include("./templates/pages/header.php"); ?>

    <div id="wrapper">
        <?php include("./templates/pages/aside.php"); ?>
    </div>
    <div id="content">
        <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
    </div>
</body>

</html>
