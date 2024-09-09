<?php
 echo "<h2>Array</h2> <br>";

// Array. 3 types
// 1. indexed
// 2. associative
// 3. multidimensional


// Indexed array
echo "<h2>Indexed array</h2> <br>";


$person_info= array("Nafiz", "Khulna", "Barishal", "Sumiya", 3453);
//var_dump($person_info);
//echo count($person_info);     // for value number count
$count = count($person_info);
echo $person_info[3];

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

foreach($person_info as $single_velue){
    echo $single_velue."<br>";
}
// array er sob value show korar jonno


echo "<br>";
echo "<br>";


// Associative array
echo "<h2>Associative array</h2> <br>";


$my_infos= array(
 "Person Name" => "Nafiz",
 "Age" =>  23,
 "Home District" => "Khulna",
 "Current District" => "Barishal",
 "Wife Name" => "Sumiya"
);

 var_dump($my_infos);

 echo "<br>";
 echo "<br>";

 echo "Total value ". count($my_infos);

 echo "<br>";
 echo "<br>"; 

 foreach($my_infos as $single_key => $single_velue){
    echo $single_key. ": ";
    echo $single_velue. "<br>";

 }

 echo "<br>";
 echo "<br>";

 print_r($my_infos);

 echo "<br>";
 echo "<br>";

 echo $my_infos['Person Name']; // For single show 


 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";



 // Multi-dimensional Array
 echo "<h2>ti-dimensional Array</h2> <br>";


 $my_bio = array( 
    "Name" => "Khaled Masud",
    "Mobile Number" => "01962-447030",
    "Address" => array(
        "Village" => "Birashi",
        "Post Office" => "Agarghata",
        "Union" => "Kapilmuni",
        "Upazila" => "Paikgachha",
        "Zila" => "Khulna"
    ),
    "Age" => 28,
    "Education" => "BSS in University of Barishal"
 );

 var_dump($my_bio);

 echo "<br>";
 echo "<br>";

 echo $my_bio["Name"] ."<br>";
 echo $my_bio["Mobile Number"]."<br>";
 echo $my_bio["Address"]["Village"]."<br>";
 echo $my_bio["Address"]["Post Office"]."<br>";
 echo $my_bio["Address"]["Union"]."<br>";
 echo $my_bio["Address"]["Upazila"]."<br>";
 echo $my_bio["Address"]["Zila"]."<br>";
 echo $my_bio["Age"]."<br>";
 echo $my_bio["Education"]."<br>";

 echo "<br>";
 echo "<br>";

 foreach($my_bio as $single_key => $single_velue){
    echo $single_key. ": ";
    echo $single_velue. "<br>";
 }

 echo "<br>";
 echo "<br>";

 // sort / rsort.
 echo "<h2>sort / rsort</h2>";


 $alphabet= array("t","r","y","w","q","u","k","o","e","z","a","m","b");

  sort($alphabet);    // sort arrays in ascending order
 // rsort($alphabet);  // sort arrays in descending order
 echo "<h3> sort arrays in ascending order</h3>";

 foreach($alphabet as $single){
    echo $single. "<br>";
 }

 echo "<br>";
 echo "<br>";

 echo "<h3> rsort arrays in descending order</h3>";


 $number= array("4","5","0","1","7","9","3","6","8","12","13","10","11");

 // sort($number);
  rsort($number);
 foreach($number as $single){
    echo $single. "<br>";
 }

 echo "<br>";
 echo "<br>";






 echo "<h2>aort / ksort</h2>";


 $bio = array( 
    "Name" => "Khaled Masud",
    "Mobile Number" => "01962-447030",
    "Zila" => "Khulna",
    "Upazila" => "Paikgachha",
    "Union" => "Kapilmuni",
    "Village" => "Birashi",
    "Age" => 28,
    "Education" => "BSS in University of Barishal"
 );

 echo "<h3>asort associative arrays in ascending order, according to the value</h3> <br>";


asort($bio);
 foreach($bio as $key => $value){
    echo $key. " : ";
    echo $value. "<br>"; 
 }

 echo "<h3>ksort associative arrays in ascending order, according to the key</h3> <br>";


ksort($bio);
 foreach($bio as $key => $value){
    echo $key. " : ";
    echo $value. "<br>"; 
 }


 echo "<h3>arsort associative arrays in descending order, according to the value</h3> <br>";


 arsort($bio);
  foreach($bio as $key => $value){
     echo $key. " : ";
     echo $value. "<br>"; 
  }
 

  echo "<h3>krsort associative arrays in descending order, according to the key</h3> <br>";


  krsort($bio);
   foreach($bio as $key => $value){
      echo $key. " : ";
      echo $value. "<br>"; 
   }
  
  
?>