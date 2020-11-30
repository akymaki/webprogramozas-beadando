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
$MAXMERET = 5000*5000;

$oldalak = array(
    '/'=>array('fajl'=>'cimlap', 'szoveg'=>'Címlap'),
    'legutobbi'=>array('fajl'=>'legutobbi', 'szoveg'=>'Legutóbbi'),
    'galeria'=>array('fajl'=>'galeria', 'szoveg'=>'Képgaléria'),
    'kapcsolat'=>array('fajl'=>'kapcsolat', 'szoveg'=>'Kapcsolat'),
    'regisztracio'=>array('fajl'=>'regisztracio', 'szoveg'=>'Regisztráció'),
    'belepes'=>array('fajl'=>'belepes', 'szoveg'=>'Belépés'),
    'belep'=>array('fajl'=>'belep', 'szoveg'=>''),
    'videok' =>array('fajl'=>'videok', 'szoveg'=>'Videók')
);

$hiba_oldal = array (
    'fajl'=>'404', 'szoveg'=> 'A keresett oldal nem található!'
);