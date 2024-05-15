
 <?php 
  include 'includes/header.php'
  ?>
<?php

/*
$_COOKIE
$_SESSION
*/

setcookie("name","Liz", time()+ 172800);
$_SESSION['name'] = "12";

echo $_SESSION['username'];


?>

</body>
</html>