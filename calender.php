<?php 
  include 'includes/header.php'
  ?>
    <p>
    <?php 
        $dayofweek = date("w");

        switch ($dayofweek)  {
            case 1:
                echo "It is Monday!";
                break;
            case 2:
                echo "It is Tuesday!";
                break; 
            case 3:
                echo "It is Wednesday!";
                break;
            case 4:
                echo "It is Thursday!";
                break;  
            case 5:
                echo "It is Friday!";
                break; 
            case 6:
                echo "It is Saturday!";
                break;
            case 0:
                echo "It is Sunday!";
                break;
        }

        echo $_SESSION['username'];

    ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </p>
</body>
</html>