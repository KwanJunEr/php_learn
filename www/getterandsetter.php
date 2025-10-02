<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Movie{
            private $title;
            private $rating;

            //public or var are the same almost

            function __construct($title, $rating)
            {
                $this->title = $title;
                $this-> setRating($rating);
            }

            function getRating(){
                return $this->rating;
            }

            function setRating($rating){
                if($rating == "G" | $rating == "PG-13" || $rating == "R" ||$rating == "NR"){
                    $this->rating = $rating;
                }else{
                    $this->rating = "NR";
                }
            }
        }

        $avengers = new Movie("Avengers", "PG-13");

        $avengers->setRating("PG-18");
        echo $avengers->getRating();

        
    ?>
</body>
</html>