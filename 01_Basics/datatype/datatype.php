<?php

// ---------- PHP Data Types ----------

// String
$name = "Faruk";

// Integer
$age = 20;

// Float
$price = 10.50;

// Boolean
$isActive = true;

// Array
$colors = ["Red", "Green", "Blue"];

// Object
class Student {}
$std = new Student();

// NULL
$data = null;


// ---------- PHP Type Conversion ----------

// 1. Implicit Conversion (Automatic)
$x = "10" + 5; // "10" becomes integer
echo $x; // 15

$y = 5 + 2.5; // integer + float = float
echo $y; // 7.5


// 2. Explicit Conversion (Manual)

// String → Integer
$val = "123";
$num = (int)$val;
echo $num; // 123

// Float → Integer
$price = 10.99;
$intPrice = (int)$price;
echo $intPrice; // 10

// Integer → String
$num = 50;
$str = (string)$num;
echo $str; // "50"

// Integer → Boolean
$v = 0;
$b = (bool)$v;
var_dump($b); // false


// ---------- gettype() ----------
echo gettype(100);      // integer
echo gettype("Hello");  // string
echo gettype(10.5);     // double
echo gettype(true);     // boolean


// ---------- settype() ----------
$val2 = "10";
settype($val2, "integer");
echo $val2; // 10
echo gettype($val2); // integer

?>
