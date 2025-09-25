<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with Strings</title>
</head>
<body>
    <?php

        $phrase = "Giraffe Academy";
        //to lower strings for all char
        echo strtolower($phrase);
        //to upper strings for all char
        echo "<br>";
        echo strtoupper($phrase);
        //how many characters

        echo "<br>";
        echo strlen($phrase);

        //index of the string 
        echo "<br>";
        echo $phrase[0];

        echo "<br>";
        $phrase[0] = "B";
        echo $phrase;

        //replace certain substring with newer ones for the phrase
        
        $phrase = "Giraffe Academy";
        echo "<br>";
        echo str_replace("Giraffe", "Panda", $phrase);

        //Grab substring starting exactly from the specified index
        echo "<br>";
        echo substr($phrase, 8);
        echo "<br>";
        echo substr($phrase, 8, 3); //grab till specified length

    ?>
</body>
</html>