<aside id="nav">
    <nav>
        <?php foreach ($oldalak as $url => $oldal) { ?>
                <li <?= ($oldal == $keres) ? 'class="active"':'' ?> >
                    <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                        <?= $oldal['szoveg'] ?>
                    </a>
                </li>
            <?php  }?>
        <li><a href="http://www.pccc.hu" target="_blank">PCCC eredeti oldala</a></li>
    </nav>
</aside>