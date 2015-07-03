<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font/stylesheet.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Laura Capellier</title>
</head>
<body>
<?php

$db = new mysqli( 'localhost' , 'root' , 'Jijou1985' , 'tbontb' );
if(!$db){
    die('HAHAHAHAHAHAHA');
}
include( 'main.php' );
//include( 'var.php' );

$main = new main();