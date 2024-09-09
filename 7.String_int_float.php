<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    
     //String Function

     $about= "My name is Khaled Masud.<br> I'm a web designer. <br>I'm expert in wordpress, and also expert in Elementor, Woocommerce and Crocoblock.<br> I have 3 years+ experience in this sector.";

     echo $about. "<br>";
     echo "<br>";
     echo "<br>";

     echo str_shuffle($about);
     echo "<br>";
     echo "<br>";
     echo "<br>";


     //To check the text length or to count the characters.
     echo "This description length ". strlen($about). " character <br>";
     echo "<br>";
     echo "<br>";

     // To count the total word.
     echo "This description total word is ". str_word_count($about). "<br>";
     echo "<br>";
     echo "<br>";

     // To reverse the whole text.
     echo strrev($about);
     echo "<br>";
     echo strrev("Khaled");
     echo "<br>";
     echo "<br>";
     echo "<br>";


     // To repeat the text.
     echo str_repeat($about, 5);
     echo "<br>";
     echo str_repeat("Khaled <br>", 10);
     echo "<br>";
     echo "<br>";
     echo "<br>";


     // To replace any word by another word.
     // echo str_replace("j word ta change korte hobe or j word ta baad dite hobe seta eikhane likhte hobe", "replace kore notun j word ta dite hobe seta eikhane dite hobe", "j text er modde replace korte hobe sei text ba variable mention korte hobe eikhane." );
     echo str_replace("designer", "developer", $about );
     echo "<br>";
     echo str_replace("Khaled Masud","Nafiz", "My name is Khaled Masud.");
     echo "<br>";
     echo "<br>";
     


     // Integer

     $number= 12345;
     
     echo "$number Is this number integer?<br>";
     var_dump(is_int($number));
     echo "<br>";
     echo "$number Is this number Float?<br>";
     var_dump(is_float($number));

    



    ?>
</body>
</html>