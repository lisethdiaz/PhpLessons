<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Loop

    //While loop
    //Do while loop
    //For loop
    //Foreach loop
    $x = 1;
    do {
        echo "hi there<br>";
        $x++;
    }
    while ($x <= 5);

    for ($x = 1; $x <= 10; $x++) {
        echo "hi<br>";
    }

    $array = array("Dnaiel", "Jane", "Jacob", "John", "Mariana");

    foreach ($array as $loopdata) {
        echo "My name is ".$loopdata. "<br>";
    }
    ?>
</body>
</html>