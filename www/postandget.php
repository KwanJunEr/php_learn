<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "postandget.php" method = "post">
        Password: <input type = "password" name = "password"><br>
        <input type = "submit">
    </form>
    <?php 
    // when use post in form then have to use post in here. POST is in the body
     echo $_POST["password"];
    ?>
    
</body>
</html>