<?php
    $kepek=array();
    $olvaso=opendir($KEPEKMAPPA);
    while(($fajl = readdir($olvaso)) !== false)
        if(is_file($KEPEKMAPPA.$fajl)) {
            $vege =strtolower(substr($fajl, strlen($fajl) - 4));
            $vege = substr($fajl, strpos($fajl, "_") + 1);
            if(in_array($vege, $TIPUSOK))
                $kepek[$fajl] = filemtime($KEPEKMAPPA.$fajl);
        }
    closedir($olvaso);
?>

<div id="galeria">
<h1>Galéria</h1>

<?php
    arsort($kepek);
    foreach($kepek as $fajl =>$datum)
    {
        ?>
        <div class="kep">
            <a href="<?php echo $KEPEKMAPPA.$fajl ?>">
                <img src="<?php echo $KEPEKMAPPA.$fajl ?>" alt="">
            </a>
            <p> Dátum: <?php echo date($DATUMFORMA, $datum);?></p>
        </div>
    <?php
    }
    ?>
</div>