<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

     /* There are 8 types of variable.
     They are... 
     1. String
     2. Integer
     3. Float
     4. Double
     5. Boolean
     6. Array
     7. Null
     8. Resources
     */






     // String

     $name = "Khaled Masud";
     $roll ="21 PAD 016";
     $reg = "911-016-21";
     $blood_group = "O+";
     $age = "22";
     $home = "Khulna";
     $department = "Public Administration";
     $university = "Barishal University";
     $mobile = "01962447030";

     Echo "<h3> My Bio data </h3>";
     Echo "Name: $name <br>Age: $age <br>Roll: $roll <br>Reg: $reg <br>Blood Group: $blood_group <br>
     Department: $department <br>University:  $university <br>Home District:  $home <br>";

     var_dump($reg);  //[(data type,length,value show korbe) variable type define kore and
     // character count kore and show kore ]
     echo "<br>";
     var_dump($name);
     echo "<br>";








     // Integer type


     // Number hote hobe.
     // positive or negative hote pare.
     // decimal,binary, octal and hexadecimal hote pare.
     // Fraction hote parbe na.**



     
     $salary = 5000;
     $number = 1962447030;  // [ 0 diye start kora jabe na]
     var_dump($salary);
     echo "<br>";
     var_dump($number);
     echo "<br>";
     echo $number;
     echo "<br>";






     // Float/Double type


     // Fraction/ Doshomik number hobe.

     $salary1= 12.456673;
     $salary2= 3445.634653;
     $salary3= 452.34235;

     var_dump($salary1);
     echo "<br>";
     var_dump($salary2);
     echo "<br>";
     var_dump($salary3);
     echo "<br>";





     // Bloolean type

     /*
     True or False [ It's boolean variable]
     True means 1
     False means 0
     */
     
     $dhaka= true;
     $khulna= false;
    
     var_dump($dhaka);
     echo "<br>";
     var_dump($khulna);
     echo "<br>";

     



     // Array type

     // Akta function/variable er modde onekgula man/value rakha jai.

     $my_bio = array("Khaled Masud", "21 PAD 016", "911-016-21", "O+", 22, "Khulna", "Public Administration", "Barishal University", "01962447030" );

     var_dump($my_bio);
     echo "<br>";
     // echo $my_bio;  Echo te Kaj kore na.





     // Null Type
     
     $dt_n = null;
     var_dump($dt_n);
     echo "<br>";

     // Class 15 Done.
    
    ?>
</body>
</html>