<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="person">
        <button>SUBMIT</button>
</form>
    <?php 
    //search bar above?//
    // This has yet to need anything from database//
       $name = $_GET ['person'];
        echo $name. " is kind of fun";
    ?>
</body>
</html>