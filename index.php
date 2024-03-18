<?php

echo "Ricks Beer Bottle Lyrics";

$bottles = "";

for ($counter = 99; $counter >= 1; $counter = $counter - 1) 
{
    if ($counter == 1) {
        $bottles = 'bottle';
    } else {
        $bottles = 'bottles';
    }
    echo $counter . " " . $bottles . " of beer on the wall.";
    if ($counter < 99) {
        echo("");
        echo $counter . " " . $bottles . " of beer on the wall.";
    }
    echo $counter . " " . $bottles . " of beer.";
    echo "Take one down and Pass it around.";
    if ($counter == 1) {
        echo "No bottles of beer on the wall.";
    }
}


?>