<?php
    $marks = 55;

    if ($marks >=90){
        echo "A+";
    }
    elseif ($marks >=80 && $marks <90){
        echo "A and marks: $marks";
    }
    elseif ($marks >=70 && $marks <80){
        echo "B and marks: $marks";
    }
    elseif ($marks >=60 && $marks <70){
        echo "C and marks: $marks";
    } 
    else{
        echo "Fail and marks: $marks";
    }
    
?>
