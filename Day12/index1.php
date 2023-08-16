<!-- index.php -->
<!DOCTYPE html>
<html>
    <head>
        <title>My PHP</title>
    </head>
    <body>
        <?php
            $school="GREENBRIDGE SCHOOL OF TECHNOLOGY";
            function myname() {
                global $school;
                $name= "Wasswa Deziderio";
                $salary=1000;
                $age=24;
                $likes= array("footbal","watching movies","eating food");
                
                $mylikes=implode("," ,$likes); 
                echo "My name is $name whoes salary is $salary dollars at $age years old.
                And my favourite things to do are $mylikes my school is $school";
            }
            myname()
                
        ?>
    </body>
</html>