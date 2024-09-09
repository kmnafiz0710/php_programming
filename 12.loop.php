<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  

        // While loop
        echo "While Loop <br>";

        $love = 1;

        while ($love < 10) {
        echo "I love you ". $love. "<br>";
        $love++;
        } 
        echo "<br>";


        // do while loop.
        echo "do while Loop <br>";


        $start = 1;
        do{
            echo "It is $start <br>";
            $start++;
        }
        while($start< 20)
    ?>
    <br>
    <?php

    
        /// For loop
        //    echo "For Loop <br>";
            
        //    $num= 0;
        //    for($num1; $num<= 20; $num++ ){
        //        echo "This is $num <br>";
        //    }


        $a=0;
        $my_info= array("NAfiz", "01962447030", "22", "Khulna", "Bangladesh");
        $a_value= count($my_info);
        echo $a_value. "<br>";

        for($a=0; $a<$a_value; $a++){
            echo $my_info[$a]. "<br>";
        }

        echo "<br>";
        echo "<br>";

        $b=0;
        $info= array("Sumiya","Satkhira", "English", "Barishal");
        $a_v= count($info);
        for($b; $b<=$a_v; $b++){
            echo $info[$b]. "<br>";
        }
    ?>
</body>
</html>