<?php
    // printing
    echo "Hello, World!";


    // variables
    $name = "Faruk Ahmed";
    $age = 23;
    $roll = 950147;
    $gpa = 3.65;

    // constants
    define("SCHOOL_NAME", "ABC College");
    define("PASS_MARK", 40);
    // echo constant("SCHOOL_NAME")
    echo "Your constant is ".SCHOOL_NAME

    $name = "Faruk";
    echo "Hello, $name!";// riscky
    $name = "Faruk";
    echo "Hello, {$name}!"; //Safe

    $name = "Faruk";
    $age = 20;

    echo sprintf("My name is %s and I am %d years old.", $name, $age);
    



?>
