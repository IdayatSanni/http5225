<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Challenge</h1>
    <?php
    $breakfast = "Bananas, Apple, Oats";
    $lunch = "Fish, Chicken, and Vegetables";
    $dinner = "Steak, Carrots, and Broccoli";
    date_default_timezone_set('America/New_York');
    $randomHour = rand(0, 23);
    $formattedHour = date('G A', strtotime("$randomHour:00"));
    echo "<h3>The current date and time are <h3 style='color:B-G'> $formattedHour</h3></h3>";
    
    if ($formattedHour >= 5 && $formattedHour < 9) {
        echo "<p>the animals should have {$breakfast} </p>";
    } 
    elseif ($formattedHour >= 12 && $formattedHour < 14) {
        echo "<p>the animals should have {$lunch}</p>";
    }
    elseif ($formattedHour >= 19 && $formattedHour < 21) {
        echo "<p>the animals should have {$dinner}</p>";
    }
        
    ?>
</body>
</html>