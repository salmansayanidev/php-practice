<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <?php
        echo "hello world"; 
    ?>

    <?php

    // scaler types  (contains one value)

        $string = ""; 
        $int = 0;
        $float = 0;
        $bool = false;

        $array = [] ;
        $object = null

    ?>

    <?php
        $name = "salman";
        $age = 24;
    ?>

    <p>My name is <?php echo $name; ?> & my age is <?php echo $age; ?> </p>





    <?php

    // SUPERGLOBLA VARIABLE



        // echo $_SERVER[""];
        // echo $_GET[""];
        // echo $_POST[""];
        // echo $_REQUEST[""];
        // echo $_FILES[""];
        // echo $_COOKIE[""];
        // echo $_SESSION[""];
        // echo $_ENV[""];
    ?>


    <?php 

        echo $_SERVER["DOCUMENT_ROOT"];
        echo "<br>";
        echo $_SERVER["PHP_SELF"];
        echo "<br>";
        echo $_SERVER["SERVER_NAME"];
        echo "<br>";
        echo $_SERVER["REQUEST_METHOD"];
        echo "<br>";


    ?>


    <?php
        echo $_GET["name"];
        echo "<br>";
        echo $_GET["age"];
    ?>



</body>
</html>