<?php

    /*
        primitive datatype
            string
            integer
            float
            boolean
            NULL
    */
    // String
    
    echo"====================== primitive datatype ====================== <br>";

    $firstName = "Faruk";
    $lastName = 'Ahmed';
    // String Concatenation
    $fullName = $firstName . " " . $lastName;

    echo $fullName;
    echo '<br>';
    echo gettype($fullName);

    echo '<br>';
    echo gettype($firstName);
    echo '<br>';
    
    // Integer
    $age = 25;
    echo $age;
    echo '<br>';
    echo gettype($age);
    echo '<br>';

    // Float
    $cgpa = 3.91;
    echo $cgpa;
    echo '<br>';
    echo gettype($cgpa);    

    echo '<br>';
    echo gettype($cgpa);
    echo '<br>';
    
    // Boolean
    $isGraduated = true;
    echo $isGraduated;
    echo '<br>';
    echo gettype($isGraduated);
    echo '<br>';

    // Null
    $isGraduated = null;
    echo $isGraduated;
    echo '<br>';
    echo gettype($isGraduated);
    echo '<br>';

    echo"====================== Non-primitive datatype ====================== <br>";

    // Array
    $numbers = array(1, 2, 3, 4, 5);
    echo '<br>';
    echo gettype($numbers);
    echo '<br>';

    // Object
    $person = (object) array("name" => "Faruk", "age" => 25);
    echo '<br>';
    echo gettype($person);
    echo '<br>';
    
    // =========================== type conversion ===========================
    // string to int
    $str1 = '1';
    $str1 = (int) $str1;
    echo $str1;
    echo '<br>';
    echo gettype($str1);
    
?>