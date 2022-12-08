<?php
    //1.call By Value
    function hello($message){
        return $message ;
    }

    $hi = hello("Hi! Mr.Mark zuckerberg");
    print($hi);

    //1.call By reference
    function welcome(&$message){
        return $message;
    }
    print("<hr/>");

    $str = "Hello Mr.jeff Bezzo";
    $welcome = welcome($str);
    print($welcome);

    function crack($a = 15,$b = 10,$c = 5){
        return $total = $a + $b + $c;
    }
    print("<hr/>");

    $a = 50; $b = 40; $c = 30;
    $sum = crack();
    $sum2 = crack(20,10,5);
    $sum3 = crack($a,$b,$c);
    print($sum);
    print("<hr/>");
    print($sum2);
    print("<hr/>");
    print($sum3);
?>
