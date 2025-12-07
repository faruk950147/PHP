<?php
include "db.php";
$name  = "Faruk";
$email = "faruk@example.com";
$sql = "INSERT INTO users (name, email) VALUES('$name', '$email')";
if(mysqli_query($conn, $sql)){ echo "Data Inserted!"; } else { echo "Insert Failed!"; }
?>