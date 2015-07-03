<?php
session_start();
include_once('dbh.php');


if (isset($_POST['name'], $_POST['password'])){

    $stmt = $dbh->prepare("SELECT name, password FROM tbontb WHERE name = ? AND password = ?");
    $stmt->execute(array($_POST['name'], $_POST['password']));
    $row = $stmt->fetch();
    if($row != false){
        $_SESSION['login'] = 'on';
        $_SESSION['name'] = $_POST['name'];
        header("Location: home.php");
    } else {echo '<p id="error">Acces non autorisé</p>';}
}
?>

<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="UTF-8">
    <title>Cifadmin</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id="content_id">
    <img src="img/logo.png" />

    <form action="index.php" method="post">
        <label>Identifiant<br>
            <input type="text" name="name" required="required">
        </label>
        <label>Mot de passe<br>
            <input type="password" name="password" required="required">
        </label>
        <input type="submit" value="Valider">
    </form>
</div>
</body>
</html>