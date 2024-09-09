<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
 
 // Check by Number

 $age =15;

 if ($age >=18){
    echo "You are a voter.";
 }
 else{
    echo "You are not a voter";
 }

 echo "<br>";
 echo "<br>";
 echo "<br>";

if ($age>=22){
    echo "You are suitable for marriage.";
}
else{
    echo "You are not of marriageable age yet";
}

echo "<br>";
echo "<br>";
echo "<br>";

// Check by String/ Text.

$pin ="Nafiz";

if($pin == "Nafiz"){
    echo "You have entered the correct password.";
}
else{
    echo "You have entered the incorrect password.";
}

echo "<br>";
echo "<br>";
echo "<br>";



// If+elseif. Check with Text.

$nationality = "Bengali";


if($nationality == "Bangladeshi"){
    echo "You are the citizen of Bangladesh!";
}
elseif ($nationality =="Bengali"){
    echo "You are the citizen of Bangladesh!";

}
else{
    echo "You are a foreigner.";
}
echo "<br>";
echo "<br>";
echo "<br>";

// Nested if 




if ($age >= 18) {
  echo "You are a voter";
   if ($age >= 22) {
    echo " and also suitable for marriage.";
   }
  else {
    echo " but not of marriageable age yet.";
  }
}
else{
echo "You are not a voter and also not suitable for marriage.";
}

echo "<br>";
echo "<br>";
echo "<br>";




//  For time


$date = date("l");  // For today's name.
$day = date("d");  // For date
$month = date("m");  // For Month
$year = date("Y");  // For Year
$Current_date = date("Y-m-d");  // For current date.

echo "Today is ". $date;
echo "<br>";
echo "Day: ". $day;
echo "<br>";
echo "Month: ". $month;
echo "<br>";
echo "Year: ". $year;
echo "<br>";
echo "Today is " . $Current_date;
echo "<br>";


//  php Condition
//  discount based on specific day


if ($date == "Friday"){
    echo "Welcome, You will get the friday's 10% discount.<br>" ;
}
elseif ($date=="Saturday") {
    echo "Welcome, You will get the Saturday's 10% discount.<br>" ;
} 
elseif ($date=="Sunday") {
    echo "Welcome, You will get the Sunday's 15% discount.<br>" ;
} 
elseif ($date=="Monday") {
    echo "Welcome, You will get the Monday's 20% discount.<br>" ;
} 
elseif ($date=="Tuesday") {
    echo "Welcome, You will get the Tuesday's 30% discount.<br>" ;
} 
elseif ($date=="Wednesday") {
    echo "Welcome, You will get the Wednesday's 40% discount.<br>" ;
} 
elseif ($date=="Thursday") {
    echo "Welcome, You will get the Thursday's 50% discount.<br>" ;
}

else{
    echo "You will get the regular 5% discount.";
}

echo "<br>";
echo "<br>";
echo "The time is " . date("h:i:s a");   // For Time

echo "<br>";
echo "<br>";



// Condition by Switch





/*
switch(current date){
    case "condition";
        echo "Message";
}
*/






switch($date){
    case $date=="Friday";
        echo "Welcome, You will get the friday's 50% discount.<br>";
        break;
    case $date=="Saturday";
        echo "Welcome, You will get the Saturday's 10% discount.";
        break;
     case $date=="Sunday";
        echo "Welcome, You will get the Sunday's 20% discount.";
        break;
     case $date=="Monday";
        echo "Welcome, You will get the Monday's 25% discount.";
        break;
     case $date=="Tuesday";
        echo "Welcome, You will get the Tuesday's 30% discount.";
        break;
     case $date=="Wednesday";
        echo "Welcome, You will get the Wednesday's 35% discount.";
        break;
     case $date=="Thursday";
        echo "Welcome, You will get the Thursday's 40% discount.";
        break;
        
}

?>
    


</body>
</html>