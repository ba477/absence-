<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="font/stylesheet.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>BETMYPRESENCE.COM</title>
</head>
    <body>
<?php

$db = new mysqli( 'localhost' , 'root' , '' , 'tbontb' );
if(!$db){
    die('HAHAHAHAHAHAHA');
}
include( 'main.php' );
//include( 'var.php' );

$main = new main();


