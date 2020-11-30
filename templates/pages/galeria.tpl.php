<?php
    $kepek=array();
    $olvaso=opendir($KEPEKMAPPA);
    while(($fajl = readdir($olvaso)) !== false)
        if(is_file($KEPEKMAPPA.$fajl)) {
            $vege = substr($fajl, strpos($fajl, "."));
            if(in_array($vege, $TIPUSOK))
                $kepek[$fajl] = filemtime($KEPEKMAPPA.$fajl);
        }
    closedir($olvaso);
?>
<?php
    $uzenet = array();

    if(isset($_POST['kuld'])) {
        foreach($_FILES as $file) {
            if($file["error"] == 4);
            elseif (!in_array($file['type'], $MEDIATIPUSOK))
                $uzenet[] = "Nem megfelelő típus";
            elseif ($file['error'] == 1 or $file['error'] == 2 or $file['size'] > $MAXMERET) {
                $uzenet[]="Túl nagy file";
            }
            else{
                if(file_exists($KEPEKMAPPA.$file['name']))
                    $uzenet[] = "Már létezik";
                else {
                    move_uploaded_file($file['tmp_name'], $KEPEKMAPPA.$file['name']);
                    $uzenet[] = "OK";
                }
            }
        }
    }?>

<div id="galeria">
<h1>Galéria</h1>

<?php
    arsort($kepek);
    foreach($kepek as $fajl =>$datum)
    {
        ?>
        <div class="kep">
            <a href="<?php echo $KEPEKMAPPA.$fajl ?>">
                <img src="<?php echo $KEPEKMAPPA.$fajl ?>" alt="" width="800">
            </a>
            <p> Dátum: <?php echo date($DATUMFORMA, $datum);?></p>
        </div>
    <?php
    }
    ?>
</div>

<div id="feltoltes">
    <h2>Kép feltöltése</h2>
    <?php
    if (!empty($uzenet)){
        echo implode($uzenet);
    }?>
    <form action=".?oldal=galeria" method="post" enctype="multipart/form-data">
        <input type="file" name="feltoltendo" required>
        <input type="submit" name="kuld" value="Feltöltés">
    </form>
</div>