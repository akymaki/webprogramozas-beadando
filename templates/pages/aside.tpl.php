<aside id="nav">
    <nav>
        <?php foreach ($oldalak as $url => $oldal) { ?>
            <?php if($oldal['fajl'] !== 'belepes' &&
                    $oldal['fajl'] !== 'regisztracio' &&
                    $oldal['fajl'] !== 'kilepes' &&
                    $oldal['fajl'] !== 'belep') { ?>
                <li <?= ($oldal == $keres) ? 'class="active"':'' ?> >
                    <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                        <?= $oldal['szoveg'] ?>
                    </a>
                </li>
        <?php } }?>

        <li><a href="http://www.pccc.hu" target="_blank">PCCC eredeti oldala</a></li>

        <?php if(isset($_SESSION['login'])) {?>
            <li>
                <a href="index.php?oldal=kilepes">Kilépés</a>
            </li>
        <?php } else { ?>
            <li>
                <a href="?oldal=regisztacio">Regisztráció</a>
            </li>
            <li>
                <a href="?oldal=belepes">Belépés</a>
            </li>
        <?php } ?>
    </nav>
</aside>