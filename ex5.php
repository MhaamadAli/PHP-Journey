<?php
function validate_email($email) {
    $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    $matches = match_regex($pattern, $email);
    return $matches === 1 ? true : "Wrong email";
}

function validate_password($password) {
    $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*]).{8,}$/';
    $matches = match_regex($pattern, $password);
    return $matches === 1 ? true : "Wrong password";
}

function match_regex($pattern, $subject) {
    $patternLength = strlen($pattern);
    $subjectLength = strlen($subject);

    for ($i = 0; $i <= $subjectLength - $patternLength; $i++) {
        if (substr($subject, $i, $patternLength) === $pattern) {
            return 1;
        }
    }
    return 0;
}

$user_email = "m.alialaawar@gmail.com";
$user_password = "Zqw";
$email_result = validate_email($user_email);
$password_result = validate_password($user_password);

if ($email_result !== true) {
    echo "Email error: $email_result\n";
}

if ($password_result !== true) {
    echo "Password error: $password_result\n";
}
?>
