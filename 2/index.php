<?php
require_once('cnx.php');


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <h1>LISTE DES CLIENTS</h1>
    <table>
        <thead>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>E-MAIL</th>
        </thead>
        <tbody>
            <tr>
                <td>LOUËR</td>
                <td>Guénaël</td>
                <td>guenael.louer@gmail.com</td>
            </tr>
            <tr>
                <td>BEUNEUX</td>
                <td>Laure</td>
                <td>laure.beuneux@gmail.com</td>
            </tr>
        </tbody>
    </table>
    <a href="#">Créer un nouveau client</a>
</body>
</html>
