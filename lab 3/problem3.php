<?php 
    $lenght = 20 ;
    $width = 20;
    $Area = $lenght * $width ;
    $Perimeter = 2*( $lenght + $width );
    echo "Lenght and width: $lenght and $width <br>";
    echo "Area: $Area <br>";
    echo "Perimeter: $Perimeter <br>";
    if ($lenght == $width){
        echo "The shape is a square";
    }
    else{
           echo "The shape is a rectangle";
    }
?>