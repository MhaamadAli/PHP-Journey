<?php 
function calculator($operation) {
    $splitted= explode(' ', $operation);
    switch($splitted[1]) {
        case '+':
            $result = $splitted[0] + $splitted[2];
            break;
        case '-':
            $result = $splitted[0] - $splitted[2];
            break;
        case '*':
            $result = $splitted[0] * $splitted[2];
            break;
        case '/':
            $result = $splitted[0] / $splitted[2];
            break;
        default:
            echo "wrong input";
    }
    print_r($result );
};

?>