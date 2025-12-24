<?php
$array = array(1, 2, 3, 4, 5);
print_r($array);
echo "</br>";
echo "Is Array: " . is_array($array);
echo "</br>";

// Correct way to use compact()
$result = compact('array');
echo "Compact: ";
print_r($result);

// Or if you just want to see the output
// echo "Compact: " . print_r(compact('array'), true);

echo "</br>";
echo "Array Size: " . count($array);
?>