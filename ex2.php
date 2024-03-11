<!-- A function that filters out numbers from a string and returns a sorted array of these numbers
 (example: hpd12aq3@8w$5 will return [3, 5, 8, 12]) -->
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