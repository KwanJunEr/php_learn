<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting User Input</title>
</head>
<body>
    <?php ?>
    <form action = "gettinguserinput.php" method = "get">
        Name: <input type = "text" name = "name">
        <br>
        <br>
        Age: <input type = "number" name = "age">
        <input type = "submit">
    </form>
    Your name is <?php echo $_GET["name"] ?> 
    <br>
    Your age is <?php echo $_GET["age"]?>
   
    
</body>
</html>