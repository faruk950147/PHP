<?php
/* 
Arithmetic operators
    Assignment operators
    Comparison operators
    Increment/Decrement operators
    Logical operators
    String operators
    Array operators
    Conditional assignment operators
*/

/* Arithmetic operators */
$x = 10;
$y = 20;
echo $x + $y;
echo $x - $y;
echo $x * $y;
echo $x / $y;
echo $x % $y;
echo $x ** $y;

/* Assignment operators */
$x = 10;
$y = 20;
echo $x = $y;
echo $x += $y;
echo $x -= $y;
echo $x *= $y;
echo $x /= $y;  
echo $x %= $y;
echo $x **= $y;

/* Comparison operators */
$x = 10;
$y = 20;
echo $x == $y;
echo $x != $y;
echo $x > $y;
echo $x < $y;
echo $x >= $y;
echo $x <= $y;

/* Increment/Decrement operators */
$x = 10;
echo $x++;
echo $x--;
echo ++$x;
echo --$x;

/* Logical operators */
$x = 10;
$y = 20;
echo $x && $y;
echo $x || $y;
echo $x xor $y;
echo !$x;
echo !$y;

/* String operators */
$x = "Hello";
$y = "World";
echo $x . $y;
echo $x .= $y;

/* Conditional assignment operators */
$x = 10;
$y = 20;
echo $x = $y ? "Yes" : "No";

/* Array operators */
$x = array("a" => "apple", "b" => "banana");
$y = array("c" => "cherry", "d" => "date");
echo $x + $y;
echo $x == $y;
echo $x != $y;
echo $x <> $y;
echo $x !== $y;

/* Error Control Operators */
$x = 10;
$y = 20;
echo @$x;
echo @$y;
echo @$z;
echo @$z;
?>