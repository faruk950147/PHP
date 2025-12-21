<?php 
    /* 
        PHP Loops
        PHP loops are used to execute the same block of code again and again, as long as a certain condition is true.

        In PHP, we have the following loop types:

        while - loops through a block of code as long as the specified condition is true
        do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
        for - loops through a block of code a specified number of times
        foreach - loops through a block of code for each element in an array
    */

    // for loop
    for($i = 1; $i <= 10; $i++){
        echo $i . "<br>";
    }

    // foreach loop
    $fruits = array("Apple", "Banana", "Cherry");
    foreach($fruits as $fruit){
        echo $fruit . "<br>";
    }

    // while loop 
    $i = 1;
    while($i <= 10){
        echo $i . "<br>";
        $i++;
    }
    // do while loop
    $i = 1;
    do{
        echo $i . "<br>";
        $i++;
    }while($i <= 10);


    // break and continue
    for ($i=0; $i < 10; $i++) { 
        if($i == 5){
            break;
        }
        echo $i . "<br>";
    }
    
?>