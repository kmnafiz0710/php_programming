<?php

// include('');


//advance function
function calculate($product_price=0,$product_qty=0){
    //$product_price= 453;
    //$product_qty= 54;
    $total_price = $product_price*$product_qty;
    return "Total ".$total_price." Tk";
}

// dynamic korar jonno amon kore function create korte hoy.


function result(){
    $bangla = 87;
    $english = 99;
    $math = 98;
    $total_mark = $bangla+$english+$math;
    return "Total Mark ".$total_mark;
}
//advance function
function average($number_1=0,$number_2=0,$qty=0){
    //$number_1 = 5463;
    //$number_2 = 67436;
    //$qty = 2;
    $total = $number_1+$number_2/ $qty;
    //$avg = $total / $qty;
    return "Average mark ".$total;

}

function minus($num1, $num2){
    $total = $num1-$num2;
    return "Total ".$total;
}



?>