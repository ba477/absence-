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
    <h1>Bet my presence.com</h1>
    <div class="col-md-6 col-md-offset-3">
        <table class="table table-hover">
            <h4>How much have you already spent?</h4>
            <tr>
                <td>TO WHOM?</td>
                <td>WHEN?</td>
                <td>HOW MUCH?</td>
            </tr>
            <tr>
                <td>Mélina</td>
                <td>June, 28th 2015</td>
                <td>1,00€</td>
            </tr>
        </table>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <?php

        $db = new mysqli( 'localhost' , 'root' , '' , 'tbontb' );
        if(!$db){
            die('HAHAHAHAHAHAHA');
        }
        include( 'main.php' );
        //include( 'var.php' );

        $main = new main();?>

