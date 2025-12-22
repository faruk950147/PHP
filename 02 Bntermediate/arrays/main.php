<?php
    // ======================= INDEXED ARRAY =======================

    $cars = array("Volvo", "BMW", "Toyota");

    // change item
    $cars[0] = "Ford";

    // add new item
    $cars[] = "Audi";

    // print array
    echo "<h3>Indexed Array</h3>";
    print_r($cars);

    echo "<br><br>";

    // ======================= LOOP THROUGH ARRAY =======================

    echo "<h3>Loop (foreach)</h3>";
    foreach ($cars as $car) {
        echo $car . "<br>";
    }

    echo "<br>";

    // ======================= DIFFERENT TYPE ARRAY =======================

    $arr1 = array("Volvo", 15, array("apples", "bananas"));

    // access items
    echo "<h3>Different Type Array</h3>";
    echo $arr1[0] . "<br>";
    echo $arr1[1] . "<br>";
    echo $arr1[2][0] . "<br>";
    echo $arr1[2][1] . "<br>";

    echo "<br>";

    // change item
    $arr1[0] = "BMW";
    
    // add new item
    $arr1[] = "New Item";

    print_r($arr1);

    echo "<br><br>";

    // ======================= ASSOCIATIVE ARRAY =======================

    $student = array(
        "name" => "Rahim",
        "age" => 18,
        "class" => "10"
    );

    // change value
    $student["age"] = 19;

    // add new key
    $student["city"] = "Dhaka";

    echo "<h3>Associative Array</h3>";
    print_r($student);

    echo "<br><br>";

    // loop associative array
    echo "<h3>Associative Array Loop</h3>";
    foreach ($student as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }

    echo "<br>";

    // ======================= MULTIDIMENSIONAL ARRAY =======================

    $users = array(
        array("Rahim", 18),
        array("Karim", 20),
        array("Salam", 22)
    );

    echo "<h3>Multidimensional Array</h3>";
    foreach ($users as $user) {
        echo $user[0] . " - " . $user[1] . "<br>";
    }

    echo "<br>";

    // ======================= ARRAY FUNCTIONS =======================

    echo "<h3>Array Functions</h3>";

    echo "Total Cars: " . count($cars) . "<br>";

    if (in_array("BMW", $cars)) {
        echo "BMW Found<br>";
    }

    array_push($cars, "Honda");
    array_pop($cars);
    array_shift($cars);
    array_unshift($cars, "Tesla");

    print_r($cars);

    // ======================= SORTING =======================

    echo "<br><br><h3>Sorting</h3>";

    sort($cars);
    print_r($cars);

?>