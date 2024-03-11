<?php 
function filter_number($input) {
    $output = [];
    for ($i=0; $i < strlen($input); $i++) { 
        if(ctype_digit($input[$i])){
            array_push($output, $input[$i]);
        }
    }
    sort($output);
    print_r($output);
}

filter_number("hpd12aq3@8w$5");
?>