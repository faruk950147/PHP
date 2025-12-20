<?php
    // =============================== variable ===============================
    $name = "Faruk";
    $age = 20;
    $is_active = true;
    echo"My name is $name and I am $age years old and I am ".$is_active." Result";
    echo "<br>";
    // =============================== constant ===============================
    const collage = "TMSS Engineering College BOGURA";
    const __ = "CSE";
    echo "My collage name is const " .collage;
    echo "<br>";
    echo "My department name is const ".__;
    echo "</br>";
    define("department", "  CSE");
    echo "My department name is define " .department;
    echo "<br>";

?>