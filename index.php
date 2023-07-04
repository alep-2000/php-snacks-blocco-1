<?php
    // SNACK-1
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
    ];
    // SNACK-2 
    // VARIABLES
    $cName = false;
    $cMail = false;
    $cAge = false;

    if(isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])){
        if(strlen($_GET['name'] > 3)){
            $cName = true;
        }

        if(str_contains($_GET['mail'], '.')){
            $cMail = true;
        }

        if(is_numeric($_GET['age'])){
            $cAge = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks Blocco 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h1>SNACK 1</h1>
    <div>
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
    </div>
    <h1>SNACK 2</h1>
    <div>
        <h2>Login</h2>
        <form action="index.php" method="GET">
            <input type="text" name="name" placeholder="Your name">
            <input type="email" name="mail" placeholder="Your mail">
            <input type="number" name="age" placeholder="Your age">
            <button type="submit">Invia</button>
        </form>
    </div>
    <div class="mt-4">
        <?php if(isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])){ ?>
            <?php if($cName && $cMail && $cAge){
                echo "Accesso Riuscito";
            }
            else{
                echo "Accesso Negato";
            } ?>    
        <?php } ?>
    </div>
</body>
</html>