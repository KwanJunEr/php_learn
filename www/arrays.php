<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //can add in any elements of any data types into the array
        $friends = array("Kevin", "Karen", "Oscar", "Jim",1);
        echo $friends[1];
        $friends[1] = "Dwight";
        echo $friends[1];
        echo count($friends);
        //add new element 
        $friends[5] = "Hello";
        echo count($friends);
    ?>
</body>
</html>