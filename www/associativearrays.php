<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "associativearrays.php" method="post">
        <input type = "text" name = "student">
        <input type = "submit">
        <br>
    </form>
   
    <?php
        //Associative Array is a type of array that allow key value pairs
        //Keys must be unique
        $grades = array("Jim"=>"A+", "Pam"=>"B-","Oscar"=>"C+");
        echo $grades["Jim"];
        $grades["Jim"] = "F";
        echo $grades["Jim"];
        echo count($grades);
        echo "<br>";
        echo $grades[$_POST["student"]];
    ?>
</body>
</html>