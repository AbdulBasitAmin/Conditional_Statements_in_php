<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $marks = "ABN";

        if($marks < 33)
        {
            echo "Fail ";

        }
        else if ($marks >= 34 && $marks< 50)
        {

            echo "C Grade ";


        }

        else if ($marks >= 55 && $marks <70)

        {


            echo "B Grade ";



        }


        else if ($marks >= 70 && $marks <80) 
        {


            echo "A Grade ";

        }

        else if ($marks >=80  &&  $marks<100)

        {

            echo "A+ Grade ";


        }

        else
        {


            echo "Invalid Input";
        }

?>


</body>
</html>