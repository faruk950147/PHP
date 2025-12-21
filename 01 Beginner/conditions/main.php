<?php
    /*     
        PHP Conditional Statements
        Conditional statements are used to perform different actions based on different conditions.

        In PHP, we have the following conditional statements:

        if statement - executes some code if one condition is true
        if...else statement - executes some code if a condition is true and another code if that condition is false
        if...elseif...else statement - executes different codes for more than two conditions
        switch statement - selects one of many blocks of code to be executed
        PHP - The if Statement
        The if statement executes some code only if the specified condition is true.

        Syntax
        if (condition) {
        // code to be executed if condition is true;
        }
    */

    // It is common to use variables in the if statement:


    //  using if else
    // $time = 5;
    // if ($time < 12) {
    //     echo "Have a good morning!";
    // }else{
    //     echo "Have a good night!";
    // }

    // using if elseif else
    // $time = 5;
    // if ($time < 0) {
    //     echo "Have a good night!";
    // }elseif($time < 12){
    //     echo "Have a good morning!";
    // }else{
    //     echo "Have a good afternoon!";
    // }

    // nested if
    // $num1 = 1;
    // if ($num1 > 0) {
    //     if ($num1 == 1) {
    //         echo "Number is 1";
    //     }else{
    //         echo "Number is positive";
    //     }
    // }else{
    //     echo "Number is negative";
    // }

    // using switch case
    $time = 2;
    switch ($time) {
        case 1:
            echo 'good morning';
            break;
        case 2:
            echo 'good afternoon';
            break;
        case 3:
            echo 'good evening';
            break;
        default:
            echo 'good night';
            break;
    }
?>