<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //populate the include php with the exact variable name
        $title = "My First Post";
        $author = "Mike";
        $wordcount = 400;
        include "article-header.php"
    ?>
    <?php
        include "useful-tools.php";
        sayHi("Mike");
        //can call the variable from that file
        echo $feetInMile;
    ?>
</body>
</html>