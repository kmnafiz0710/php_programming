<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <?php

 //Global variable locally use korar system 1

 $home= "Khulna (system 1) <br>";

 function your_address(){
   global $home;
   echo "My address ". $home;
 }

 your_address();

  //Global variable locally use korar system 2

  $home1= "Dhaka (system 2) <br>";

 function my_address(){
    echo "My address ".$GLOBALS ['home1'];
 }
 my_address();

 ?>



</body>
</html>