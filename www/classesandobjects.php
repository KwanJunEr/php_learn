<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Book{
            var $title;
            var $author;
            var $pages;

            // function __construct($name)
            // {
            //     // echo "New Book Created <br>";
            //     echo $name;
            // }

            function __construct($aTitle, $aAuthor, $aPages)
            {
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        $book1 = new Book("Harry Potter", "JK Rowling",400);
        // $book1->title = "Harry Potter";
        // $book1->author = "JK Rowling";
        // $book1->pages = 400;
        $book1->title="Hunger Games";

        echo $book1->title;

        $book2 = new Book("Lord of the Rings", "Tolkein",700);
        // $book2->title = "Lord of the Rings";
        // $book2->author = "Tolkein";
        // $book2->pages = 700;

        echo $book2->author;

    ?>
</body>
</html>