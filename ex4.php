<?php 
function reverseNumber($original_number) {
    $reversed_number = 0; 
    while($original_number > 0) {
        $rev_digit = $original_number % 10;
        $reversed_number = $reversed_number * 10 + $rev_digit;

        $original_number = (int)($original_number / 10);

    }
    return $reversed_number;
}
echo(reverseNumber(12345));
?>