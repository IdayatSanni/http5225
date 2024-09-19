<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Magic Number Game</title>
</head>
<body>
    <h1>Learning php</h1>
    <?php
    
        $userNumber = rand(10,100);
        echo $userNumber;
        if ($userNumber % 3 == 0) {
            echo "<p>The magic number is Fizz</p>";
        } 
        elseif ($userNumber % 5 == 0) {
            echo "<p>The magic number is Buzz</p>";
        }
        elseif ($userNumber % 3 == 0 && $userNumber % 5 == 0) {
            echo "<p>The magic number is FizzBuzz</p>";
        }
        else {
            echo "<p>The magic number is  {$userNumber}</p>";
        }
        

    ?>
</body>
</html>