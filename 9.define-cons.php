<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

     //Define Function

     //  define("name", "vale");
     // echo name;

     define("welcome", "Welcome to our website");
     echo welcome;
     echo "<br>";
     echo "<br>";

     
     // Define er variable k user define function er modde use kora jai.
     function wel_mess(){
     echo welcome;
     }

     wel_mess();
     echo "<br>";
     echo "<br>";


     // Define er modde Array value lekhar system.

     define("my_info", ['Khaled Masud', '01962447030', 'khulna']);

     var_dump(my_info);
     echo "<br>";
     echo "<br>";

     echo "My Bio";
     echo "<br>";
     echo "Name: ". my_info[0];
     echo "<br>";
     echo "Mobile Number: ". my_info[1];
     echo "<br>";
     echo "Home District: ". my_info[2];
     echo "<br>";
     echo "<br>";
     echo "<br>";
     echo "<br>";


     // Constant Function

     const name = "Khaled Masud";
     echo name;
     echo "<br>";


      // Magic Constant.

      // Directory janar jonno
      echo __DIR__;
      echo "<br>";

      // kon file e achi seta janar jonno.
      echo __FILE__;

      // kon line e achi seta janar jonno.
      echo " and line number ". __LINE__;
      echo "<br>";


      // Function name janar jonno.
     function result(){
        echo "Function name: " . __FUNCTION__;
     }
     result();


    
    ?>
</body>
</html>