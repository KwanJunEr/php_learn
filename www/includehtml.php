<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php
        //include another html or php file into the php file to use all the code from the other files to the current file
        include "header.html"
     
    ?>
    <p>Hello World</p>
    <!--Only allow one include per php -->
    <?php
        include "footer.html"
    ?>
    
    
</body>
</html>