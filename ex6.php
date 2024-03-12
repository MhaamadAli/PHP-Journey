<?php
function validateIPv4($ip) {
    $pattern = '/^(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})$/';

    if (preg_match($pattern, $ip, $matches)) {
        foreach ($matches as $octet) {
            if ($octet < 0 || $octet > 255) {
                return false;
            }
        }
        return true;
    }
    return false;
}
echo validateIPv4("192.168.1.1")
?>