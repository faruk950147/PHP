<?php
/*
    PHP = Hypertext Preprocessor

    echo
    - Language construct
    - Can display one or more values
*/
echo "Hello ", "World"; // Output: Hello World

/*
    print
    - Language construct
    - Can display only one value
    - Always returns 1
*/
print "Hello PHP"; // Output: Hello PHP

/*
    print_r()
    - Function
    - Displays variable (array/object) in readable format
    - Useful for debugging
*/
$arr = [1, 2, 3];
print_r($arr); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 )

/*
    var_dump()
    - Function
    - Displays variable type, value, and size
    - Useful for detailed debugging
*/
var_dump($arr); 
/*
Output:
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
*/

/*
    var_export()
    - Function
    - Displays variable as PHP code
    - Can optionally return as string
*/
var_export($arr); // Output: array ( 0 => 1, 1 => 2, 2 => 3, )

/*
    die() / exit()
    - Function
    - Stops script execution
    - Can optionally display a message
*/
// die("Stopping script"); // Uncomment to stop execution

/*
    sprintf()
    - Function
    - Does not directly display output
    - Creates formatted string and returns it
*/
$name = "Faruk";
$str = sprintf("Hello %s!", $name);
echo $str; // Output: Hello Faruk!
?>
