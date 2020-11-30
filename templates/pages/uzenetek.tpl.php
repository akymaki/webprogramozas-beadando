<?php

    $dbh = new PDO('mysql:host=localhost;dbname=beadando', 'root', '', null);
    $dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');

    $query = "select * from uzenetek";
    $sth = $dbh->prepare($query);
    $sth->execute();
    $osszes = $sth->fetchAll();
    // echo $sth->rowCount();
    // var_dump($osszes);
    $sorba = krsort($osszes,SORT_REGULAR);
?>

<table>
    <tr>
        <td>ID</td>
        <td>Nev</td>
        <td>Email</td>
        <td>Üzenet</td>
    </tr>
    <?php
    foreach ($osszes as $row => $value) {?>
    <tr>
        <td><?=$value['id']?></td>
        <td><?=$value['nev']?></td>
        <td><?=$value['email']?></td>
        <td><?=$value['uzenet']?></td>
    </tr>
    <?php    } ?>
</table>