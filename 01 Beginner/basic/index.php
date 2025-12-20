<?php
/*
    PHP = Hypertext Preprocessor

    echo
    - Language construct
    - Can display one or more values
*/
echo"Hello World";
echo "<br>";
echo "Hello ", "World ", "PHP";
echo "<br>";
/*
    print
    - Language construct
    - Can display only one value
    - Always returns 1
*/
print "Hello World";
echo "<br>";
/*
    print_r()
    - Function
    - Displays variable (array/object) in readable format
    - Useful for debugging
*/
echo print_r([1, 2, 3], true);
echo "<br>";
/*
    var_dump()
    - Function
    - Displays variable type, value, and size
    - Useful for detailed debugging
*/
echo "<br>";
echo var_dump([1, 2, 3]);
echo "<br>";
/*
    var_export()
    - Function
    - Displays variable as PHP code
    - Can optionally return as string
*/
echo var_export([1,2, 3], true);
echo "<br>";

/*
    die() / exit()
    - Function
    - Stops script execution
    - Can optionally display a message
*/
die("Script execution stopped");

/*
    sprintf()
    - Function
    - Does not directly display output
    - Creates formatted string and returns it   
*/
$name = "Faruk";
echo sprintf("%s %s %s", $name, "World", "PHP");
echo "<br>";
?>