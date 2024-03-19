<?php

$bottles = "";

echo "\n";
// For Loop starts from 99, decrease by 1 over every iteration.
for ($counter = 99; $counter >= 1; $counter = $counter - 1) // If counter greater than or equal to 1 then decrease counter by one.
{
    if ($counter == 1) {
        $bottles = 'bottle';
    } else {
        $bottles = 'bottles';
    }
    echo $counter . " " . $bottles . " of beer on the wall.";
    if ($counter < 99) { // Need to repeat same this line again if counter below 99.
        echo "\n\n";
        echo $counter . " " . $bottles . " of beer on the wall.";
    }
    echo " " . $counter . " " . $bottles . " of beer.";
    echo " Take one down and Pass it around.";
    if ($counter == 1) {
        echo " No bottles of beer on the wall.";
    }
}


?>