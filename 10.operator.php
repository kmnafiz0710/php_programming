<?php

/*
we use seven types of operator in php.
1. Arithmatic  (+,-,*,/,%)
2. Assignment (=,+=,-=,%=)
3. Comparrison (==,!=,<>,!==,<,>,<=,>=)
4. Increment/ Decrement (++,--)
5. Logical (&&,||,!)
6. String (., .=)
7. Array (==,!=)
8. Conditional Assignment / Ternary (?,:)
*/

/*
First of all we should know about Operent,Operator and Expression.

*/

$price = 50;
$qty = 30;
$total_price = $price*$qty;  // [Expression] This line.

echo "Total Price: ". $total_price;
echo "<br>";
// $price and $qty , eigula holo Operent. [operator jegula niye kaj kore segula holo operent]
// ( * ) holo Operator





// Conditional Assignment / Ternary Operator

// $result = condition? true:false;

$age =18;
$access = $age>=18?"you have access in this site":"You don't have access in this site";
echo $access;
echo "<br>";
$access1 = $age<18?"you are just a kid":"You are adult";
echo $access1;





?>