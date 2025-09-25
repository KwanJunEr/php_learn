<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with Numbers</title>
</head>
<body>
    <?php
        echo 5+9;
        echo "<br>";
        echo 5.7*9;

        //modular sign
        echo "<br>";
        echo 10%3;

        //post increment 
        $num = 10;
        $num++;
        echo "<br>";
        echo $num;

        //post decrement 
        $num = 10;
        $num--;
        echo "<br>";
        echo $num;

        //working with variables and additon
        $num = 10;
        $num += 25; //means num = num +25
        echo "<br>";
        echo $num;

        //finding the absolute
        echo "<br>";
        echo abs(-100);

        //power fomrula
        echo "<br>";
        echo pow(2,4); //2 to the power of 4

        //square root
        echo "<br>";
        echo sqrt(144);

        //find larger number 
        echo "<br>";
        echo max(2,10);

        //find the smaller number 
        echo "<br>";
        echo min(2,10);

        //roudning the number 
        echo "<br>";
        echo round(3.7);

        //rounding everything to the larger by one round up always
        echo "<br>";
        echo ceil(3.2); //result is 4

        //rounding everything to the smaller by one round down always
        echo "<br>";
        echo floor(3.7); //reuslt is 3
    ?>
</body>
</html>