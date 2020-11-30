<?php
$ablakcim = array(
    'cim' => 'PCCC',
);

$fejlec = array(
    'kepforras' =>'kep.jpg',
    'kepalt' => 'logo',
    'cim' => 'PCCC'
);

$lablec = array (
    'copyright' => 'Copyright'.date("Y").'.',
);

$KEPEKMAPPA='./images/galeria/';
$TIPUSOK=array('.jpg', '.png', '.webp');
$MEDIATIPUSOK=array('image/jpeg', 'image/png');
$DATUMFORMA="Y.m.d. H:i";
$MAXMERET = 500*1024;

$oldalak = array(
    '/'=>array('fajl'=>'cimlap', 'szoveg'=>'Címlap'),
    'legutobbi'=>array('fajl'=>'legutobbi', 'szoveg'=>'Legutóbbi'),
    'galeria'=>array('fajl'=>'galeria', 'szoveg'=>'Képgaléria'),
    'kapcsolat'=>array('fajl'=>'kapcsolat', 'szoveg'=>'Kapcsolat'),
    // 'versenyek'=>array('fajl'=>'versenyek', 'szoveg'=>'Versenyek'),
    // 'tagok'=>array('fajl'=>'tagok', 'szoveg'=>'Tagok'),
    // 'bringasuli'=>array('fajl'=>'bringasuli', 'szoveg'=>'Bringasuli'),
    // 'elerhetosegek'=>array('fajl'=>'elerhetosegek', 'szoveg'=>'Elerhetosegek'),
    // 'archivum'=>array('fajl'=>'archivum', 'szoveg'=>'Archívum'),
    'videok' =>array('fajl'=>'videok', 'szoveg'=>'Videók')
);

$hiba_oldal = array (
    'fajl'=>'404', 'szoveg'=> 'A keresett oldal nem található!'
);