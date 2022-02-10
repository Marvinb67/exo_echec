<?php

$piecesBlanc = [
    'tour',
    'cavalier',
    'fou',
    'reine',
    'roi',
    'fou',
    'cavalier',
    'tour',
    'pion', 'pion', 'pion', 'pion', 'pion', 'pion', 'pion', 'pion',
];

$piecesNoir = array_reverse($piecesNoir);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <?php
        for ($i = 1; $i < 8; ++$i) {
            for ($j = 0; $j < 8; ++$j) {
            }
        }
        ?>
    </div>
</body>
</html>