<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo str_replace("Liz","Daniella","Hey Liz") ;

    ?>
    <?php
    
    $x = 100;

    function newCalc($x) {
        $newnr = $x * 0.75;
        echo "Here is 75% of what you wrote: ".$newnr;
    }


    $x = 100;
    newCalc($x);

    echo "<br>";

    $a = 100;
    newCalc($a);

    ?>
</body>
</html>