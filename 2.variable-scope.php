<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

     $name="Khaled Masud<br>";
     $mobile_number="01962447030<br>";
     $age= "22<br>";
     $home= "Khulna<br>";
     $salary= "20000";
     $bonus="10000";

     echo $name, $home, $age, $mobile_number;
     echo "Total: ". $salary+ $bonus. " tk";
     echo " <br> ";
     //echo "Total $salary+ $bonus tk"; (calculation wrong)
     echo "Total $salary tk (without bonus) <br>";



     /* 
     Variable scope: 3 types

     1. Local- user define finction er modde j variable thake segula local variable.
     2. Global- normally j variable use kora hoi jeta globally kaj kore seta global variable.
     3. Static- 


     Function : 2 types

     1. Built in-  Suru theke j functions gula chilo. such as echo,print etc
     2. User Define- nijer proyohone notun kore create korte hoi.

     */

     // Function declear
     function your_address(){
        echo "Dhaka <br>"; 
        $home= "Khulna<br>";   //[Local variable]
        echo $home;
     }

     /* 
     Function declear details
     1. function
     2. function name
     3. () header
     4. {} body
     5. body er modde details likhte hobe.
     */


     // Function call

     your_address();



    ?>

</body>
</html>


