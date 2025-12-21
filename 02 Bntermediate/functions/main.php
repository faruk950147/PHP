<?php
    /* PHP Built-in Functions
    PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task. Please check out our PHP reference for a complete overview.

    PHP User Defined Functions
    Besides the built-in PHP functions, it is possible to create your own functions.

    A function is a block of statements that can be used repeatedly in a program.
    A function is not executed automatically when a page loads.
    A function is executed only when it is called.
    Create a Function
    A user-defined function declaration starts with the keyword function, followed by the name of the function.

    The opening curly brace { indicates the beginning of the function code, and the closing curly brace } indicates the end of the function.

    Note: A function name is not case-sensitive, and it must start with a letter or an underscore.

    Syntax
    function function_name(){
        // code to be executed
        return $value; // optional
    }
 */
<?php
declare(strict_types=1); // enable strict typing

// ================================== simple function ======================================
function myMessage() {
    echo "Hello world!<br>";
}

myMessage();

// ================================== function parameters ======================================
function familyName($fname, $year = null) {
    if ($year) {
        echo "$fname Refsnes. Born in $year.<br>";
    } else {
        echo "$fname Refsnes.<br>";
    }
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Jani");

// ================================== default parameter value ======================================
function setHeight($height = 50) {
    echo "The height is : $height <br>";
}

setHeight(350);
setHeight(); // uses default value 50

// ================================== pass by reference ======================================
function add_five(&$value) {
    $value += 5;
}

$num = 2;
add_five($num);
echo "Value after add_five: $num<br>"; // outputs 7

// ================================== variadic arguments ======================================
function sumMyNumbers(...$x) {
    $sum = 0;
    foreach ($x as $value) {
        $sum += $value;
    }
    return $sum;
}

echo "Sum: " . sumMyNumbers(5, 2, 6, 2, 7, 7) . "<br>";

// ================================== variadic arguments with other parameters ======================================
function myFamily($lastname, ...$firstname) {
    $txt = "";
    foreach ($firstname as $name) {
        $txt .= "Hi, $name $lastname.<br>";
    }
    return $txt;
}

echo myFamily("Doe", "Jane", "John", "Joey");

// ================================== strict types and return type ======================================
function addNumbersInt(int $a, int $b): int {
    return $a + $b;
}

echo "Add Int: " . addNumbersInt(5, 10) . "<br>";

// This will throw an error if strict_types=1
// echo addNumbersInt(5, "5 days"); // Uncomment to test TypeError

function addNumbersFloat(float $a, float $b): float {
    return $a + $b;
}

echo "Add Float: " . addNumbersFloat(1.2, 5.2) . "<br>";

function addNumbersFloatToInt(float $a, float $b): int {
    return (int)($a + $b);
}

echo "Add Float to Int: " . addNumbersFloatToInt(1.2, 5.2) . "<br>";

echo "Add Float to Int: " . addNumbersFloatToInt(0,0) . "<br>";

?>