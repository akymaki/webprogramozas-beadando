<script type="text/javascript" src="./script/email.js"></script>

<h1>Kapcsolat</h1>
<form action="index.php?oldal=kapcsolat" name="kapcsolat" onsubmit="return ellenoriz();" method="post">

    <div>
        <label>Név (minimum 5 karakter):<input type="text" id="nev" name="nev" size="20" maxlength="40"></label>
        <br/>
        <label>Email:<input type="text" id="email" name="email" size="30" maxlength="40"></label>
        <br/>
        <label>Üzenet: <textarea id="uzenet" name="uzenet" size="20" cols="40" rows="10"></textarea></label>
        <br/><br>
        <input type="submit" name="kuld" value="Küld" id="kuld">
        <button type="button" onclick="ellenoriz();">Ellenőriz</button>
    </div>
</form>

<?php

if(!empty($_POST))
{

    if(!isset($_POST['nev']) || strlen($_POST['nev']) < 5)
    {
    exit("Hibás név");
    }

    $re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
    if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
    {
        exit("Hibás email");
    }

    if(!isset($_POST['uzenet']) || empty($_POST['uzenet']))
    {
        exit("Hibás szöveg");
    }

    // echo "Kapott értékek: ";
    // echo "<pre>";
    // var_dump($_POST);
    // echo "<pre>";

    $dbh = new PDO('mysql:host=localhost;dbname=beadando', 'root', '', null);
    $dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');

    $query = "INSERT INTO uzenetek(id, nev, email, uzenet) VALUES (0,:nev, :email, :uzenet)";
    $stmt = $dbh->prepare($query);
    $stmt->execute(array(':nev' => $_POST['nev'], ':email' => $_POST['email'], ':uzenet' => $_POST['uzenet']));
    if($count = $stmt->rowCount()) {
        $newid = $dbh->lastInsertId();
        $uzenet = "A regisztrációja sikeres.<br>Azonosítója: {$newid}";
        $ujra = false;
    }
    else {
        $uzenet = "A regisztráció nem sikerült.";
        $ujra = true;
    }
}

?>