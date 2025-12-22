<?php
$name = "Faruk Ahmed";
$surname = "Ahmed";
$full_name = $name . " " . $surname;
echo $full_name;
echo "<br>Length: " . strlen($full_name);
echo "<br>Word Count: " . str_word_count($full_name);
echo "<br>Reverse: " . strrev($full_name);
echo "<br>Position: " . strpos($full_name, "Ahmed");
echo "<br>Last Position: " . strrpos($full_name, "Ahmed");
echo "<br>Case Insensitive Position: " . stripos($full_name, "ahmed");
echo "<br>Case Insensitive Last Position: " . strripos($full_name, "ahmed");
echo "<br>Contains: " . str_contains($full_name, "ahmed");
echo "<br>Starts With: " . str_starts_with($full_name, "faruk");
echo "<br>Ends With: " . str_ends_with($full_name, "ahmed");
?>