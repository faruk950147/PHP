<?php
// -------------------------------
// 1 Empty Class Example
// -------------------------------
class CartoonEmpty
{
    // Empty class
}

$cartoon = new CartoonEmpty();
var_dump($cartoon);


// -------------------------------
// 2 Instance Variables + Constructor
// -------------------------------
class CartoonInstance
{

    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function display()
    {
        echo $this->name . " " . $this->age . PHP_EOL;
    }
}

$cartoon = new CartoonInstance("Cartoon", 10);
$cartoon->display();


// -------------------------------
// 3 Class Variables (Static)
// -------------------------------
class CartoonStatic
{

    public static $name = "Cartoon";
    public static $age = 10;

    public function display()
    {
        echo self::$name . " " . self::$age . PHP_EOL;
    }
}

$cartoon = new CartoonStatic();
$cartoon->display();


// -------------------------------
// 4 Class + Instance Variables Together
// -------------------------------
class CartoonBoth
{

    public static $name = "Cartoon";
    public static $age = 10;

    public $iname;
    public $iage;

    public function __construct($name, $age)
    {
        $this->iname = $name;
        $this->iage = $age;
    }

    public function display()
    {
        echo $this->iname . " " . $this->iage . PHP_EOL;
        echo self::$name . " " . self::$age;
    }
}

$cartoon = new CartoonBoth("Tom", 5);
$cartoon->display();


?>