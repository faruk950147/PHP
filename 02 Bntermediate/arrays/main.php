<?php
    // simple array
    $cars = array("Volvo", "BMW", "Toyota");

    var_dump($cars);
    echo "<br><br>";

    // different type array
    $arr1 = array("Volvo", 15, ["apples", "bananas"]);

    echo $arr1[0] . "<br>";
    echo $arr1[1] . "<br>";
    echo $arr1[2][0] . "<br>"; // apples
    echo $arr1[2][1];          // bananas
?>