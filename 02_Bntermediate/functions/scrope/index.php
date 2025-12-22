<?php
// Global Scope
$x = 10;

function test() {
    // Local Scope
    global $x; // global keyword is used to access the global variable inside the function
    $y = 20;
    echo "x: {$x} <br>"; // 10
    echo "y: {$y} <br>"; // 20
    $x = 30;
}
test();
echo "x: {$x} <br>"; // 30
?>
