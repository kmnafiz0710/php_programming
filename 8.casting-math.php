<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

     // Casting


     $price= 5423.6636;

     echo "Price ".$price. " tk <br>";
     var_dump($price);
     echo "<br>";





     // Float to integer. Float theke integer e convert kora.



     echo "Price ". (int)$price. " tk (Without fraction)<br>";
     $price1= (int)$price;
     echo $price1;
     echo "<br>";

     var_dump($price1);
     echo "<br>";
    





     // String to integer -->



     $reg= "1513520231";
     var_dump($reg);
     $reg1= (int)$reg;
     echo "<br>";
     var_dump($reg1);
     echo "<br>";
     echo "Registration Number ". $reg1;
     echo "<br>";
     

     // --------- PHP MATH ----------



     // max.min, abs,sqrt, rand, round, 

     // $num01 = (max(123,1241,1241,256,34764,865,255,567,26262,96453));
     // Maximum and Minimum aksathe kaj kore na.
     //$num02 = (min(32,234,64,3243,4657,213,4643,6465));
     // $num02 = (min(32,234,64,3243,4657,213,4643,6465));
     //echo "<br>";

     //echo $num02;
     //echo "<br>"


     // absolute number ber korar jonno
     echo(abs(-6.7));
     echo "<br>";

     // random number ber korar jonno
     echo rand(1000,1000000000);
     echo "<br>";

     // Round figure number ber korar jonno
     echo round(645.276);
     echo "<br>";

     // Number er square root korar jonno
     echo sqrt(16);
     // class 19 done.


    ?>
</body>
</html>