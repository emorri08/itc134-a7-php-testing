<?php

    include 'Calculator.php';
    
    $myCalc = new Calculator();
    
    echo $myCalc->add(1,2); //3

    echo $myCalc->divide(4,2);//2

    echo $myCalc->multiply(3,4)//12
?>