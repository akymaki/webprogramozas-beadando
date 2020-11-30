<?php
    if(isset($_POST['felhasznalo']) && isset($_POST['jelsz'])) {
        try {
            $dbh= new PDO('mysql:host=localhost;dbname=beadando', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

            $sqlSelect="select id, felhasznalo from felhasznalok where bejelentkezes = :bejelentkezes and jelszo = sha1(:jelszo)";
            $sth=$dbh->prepare($sqlSelect);
            $sth->execute(array('bejelentkezes'=>$_POST['felhasznalo'], ':jelszo'=>$_POST['jelszo']));
            $row=$sth->fetch(PDO::FETCH_ASSIC);
            if($row) {
                $_SESSION['felhasznalo'] = $row['felhasznalo']; $_SESSION['id']=$row['id']
            }
            echo 'lol  ';
        } catch (\Throwable $th) {
            //throw $th;
        }
    } ?>