<?php
    // ARRAY MATCHES
    $mathches = [
        [
            'teams' => 'Crotone - Salernitana',
            'results' => '50-80'
        ],
        [
            'teams' => 'Genova - Oristano',
            'results' => '20-50'
        ],
        [
            'teams' => 'Monte Rotondo - Roma',
            'results' => '80-102'
        ],
        [
            'teams' => 'Samassi - Firenze',
            'results' => '30-30'
        ],
        [
            'teams' => 'Colle Monfortani - Ostia',
            'results' => '35-90'
        ],
        [
            'teams' => 'Lunghezza - Bolzano',
            'results' => '50-75'
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks Blocco 1</title>
</head>
<body>
    <h2>Matches</h2>
    <!-- LIST RESULTS -->
    <ul>
        <?php 
            // CICLE FOR-EACH
            foreach($mathches as $match){
                echo "<li>" .$match['teams']." | " .$match['results'] ."</li>";
            } 
        ?>
    </ul>
</body>
</html>