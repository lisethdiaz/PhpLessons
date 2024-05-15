<?php 
  include 'includes/header.php'
  ?>
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

    echo $_SESSION['username'];

    ?>
</body>
</html>