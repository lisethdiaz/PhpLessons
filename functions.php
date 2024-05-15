<?php 
  include 'includes/header.php'
  ?>
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

    echo $_SESSION['username'];

    ?>
</body>
</html>