<?php

$number = 9 ;

if ($number % 3 == 0 && $number % 7 == 0) {
    echo "$number is a multiple of both 3 and 7.";
} elseif ($number % 3 == 0) {
    echo "$number is a multiple of 3.";
} elseif ($number % 7 == 0) {
    echo "$number is a multiple of 7.";
} else {
    echo "$number is not a multiple of 3 or 7.";
}

?>
