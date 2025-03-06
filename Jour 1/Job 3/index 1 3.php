<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo 
    <<<HTML
    <style>
        th, td
        {
            border: 1px solid black;
        }
    </style>

    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Naissance</th>
        </tr>

        <tr>
            <td>Mario</td>
            <td>Mario</td>
            <td>1981</td>
        </tr>
    </table>
    HTML;