<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Chef{
            function makeChicken(){
                echo "The chef makes chicken <br>";
            }

            function makeSalad(){
                echo "The chef makes salad <br>";
            }

            function makeSpecialDish(){
                echo "The chef makes bbq ribs <br>";
            }
        }

        class ItalianChef extends Chef{
            function makePasta(){
                echo "The chef makes pasta <br>";
            }
            //this is overriding
            function makeSpecialDish()
            {
                echo "The chef makes chicken parm <br>";
            }
        }
        $chef = new Chef();
        $chef ->makeChicken();
        $chef ->makeSpecialDish();

        $italianChef = new ItalianChef();
        $italianChef -> makeChicken();
        $italianChef -> makePasta();
        $italianChef -> makeSpecialDish();
    ?>
</body>
</html>