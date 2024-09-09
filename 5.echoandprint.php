<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     //difference between echo and print

     // Echo

     echo "Amar ", "Bazar ", "list <br>";

     $product_1 = "Mangsho";
     $Product_2 = "Peaj";
     $product_3 = "Alu";
     $price_1 = "200";
     $price_2 = "55";
     $price_3 = "30";
     $total_price = $price_1+$price_2+$price_3;

     echo "Product Name: $product_1, $Product_2, $product_3 <br>";
     echo "Product Name:". $product_1. $Product_2. $product_3 ;
     echo "<br>";
     echo "Total Price ($price_1 + $price_2 + $price_3) = $total_price tk <br>";


     //Print

     //print "I", "love ", "You <br>"; [Wrong]
     print "Amar bazar list <br>";

     $product_1 = "Mangsho";
     $Product_2 = "Peaj";
     $product_3 = "Alu";
     $price_1 = "200";
     $price_2 = "55";
     $price_3 = "30";
     $total_price = $price_1+$price_2+$price_3;

     print "Product Name: $product_1, $Product_2, $product_3 <br>";
     print "Product Name:". $product_1. $Product_2. $product_3 ;
     print "<br>";
     print "Total Price ($price_1 + $price_2 + $price_3) = $total_price tk <br>";


    
    
    
    ?>
</body>
</html>