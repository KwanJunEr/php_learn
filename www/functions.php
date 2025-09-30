<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sayHi(){
            echo "Hello User <br>";
        }

        function sayHiwithParams($name,$age){
            echo "Hello $name, you are $age<br>";
        }

        sayHi();
        sayHiwithParams("John",30);
    ?>
    
</body>
</html>