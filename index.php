<?php

var_dump($_SESSION['logged_in']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon Home Page</title>
    <style>
        /* Basic CSS for styling */
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Pokémon Home Page</h1>

    <ul>
        <?php
        // Define an array of Pokémon
        $pokemon = array("Pikachu", "Bulbasaur", "Charmander", "Squirtle", "Jigglypuff");

        // Loop through the array and display each Pokémon
        foreach ($pokemon as $poke) {
            echo "<li>$poke</li>";
        }
        ?>
    </ul>
</body>
</html>
