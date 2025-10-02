<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //object function is a function efers to a method — which is simply a function defined inside a class and can be called on an object created from that class.
        class Student{
            var $name;
            var $major;
            var $gpa;

            // function __construct($name)
            // {
            //     // echo "New Book Created <br>";
            //     echo $name;
            // }

            function __construct($name, $major, $gpa)
            {
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

            //Object function 
            function hasHonors(){
                if($this->gpa >= 3.5){
                    return "true";
                }
                return "false";
            }
        }

        $student1 = new Student("Jim", "Business", 2.8);
        $student2 = new Student("Pam", "Art", 3.6);

        echo $student1->hasHonors(); //called the hasHonors 
       
    ?>
</body>
</html>