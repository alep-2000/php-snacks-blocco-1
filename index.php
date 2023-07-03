<?php
    // ARRAY MATCHES
    $mathches = [
        [
            'homeTeam' => 'Crotone',
            'guestTeam' => 'Salernitana',
            'homePoints' => '50',
            'guestPoints' => '80'
        ],
        [
            'homeTeam' => 'Genova',
            'guestTeam' => 'Oristano',
            'homePoints' => '20',
            'guestPoints' => '50'
        ],
        [
            'homeTeam' => 'Monte Rotondo',
            'guestTeam' => 'Roma',
            'homePoints' => '80',
            'guestPoints' => '102'
        ],
        [
            'homeTeam' => 'Samassi',
            'guestTeam' => 'Firenze',
            'homePoints' => '30',
            'guestPoints' => '30'
        ],
        [
            'homeTeam' => 'Colle Monfortani',
            'guestTeam' => 'Ostia',
            'homePoints' => '35',
            'guestPoints' => '90'
        ],
        [
            'homeTeam' => 'Lunghezza',
            'guestTeam' => 'Bolzano',
            'homePoints' => '50',
            'guestPoints' => '75'
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
                echo "<li>" .$match['homeTeam']." - ".$match['guestTeam']." | " .$match['homePoints']." - ".$match['guestPoints'] ."</li>";
            } 
        ?>
    </ul>
</body>
</html>