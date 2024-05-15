
  <?php 
  include 'includes/header.php'
  ?>
  <?php
    include_once 'includes/dbh.inc.php';
  ?>
    <form method="GET">
        <input type="text" name="person">
        <button>SUBMIT</button>
</form>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <p>You are logged out!</p>
                <p>You are logged in!</p>
            </section>
        </div>
    </main>
    <?php 
        $x = 1;
        if ($x == 1) {
            echo "Liz is very handsome!";
        } 
        elseif ($x == 2) {
            echo "Liz is kinda ugly!";
        } 
        elseif ($x == 3) {
            echo "Liz is kinda ugly!";
        } 
        elseif ($x == 4) {
            echo "Liz is kinda ugly!";
        }
        else {
            echo "Liz is very ugly!";
        }


        $x = 8;
        
        switch ($x) {
            case 1:
                echo "The answer is 1";
                break;
            case 2:
                echo "The answer is 2";
                break;
            case 3:
                echo "The answer is 3";
                break;
            case 4:
                echo "The answer is 4";
                break;
                default:
                    echo "There is no answer";

        }

        echo $_SESSION['username'];
          $conn;
    ?>
  
    
</body>
</html>