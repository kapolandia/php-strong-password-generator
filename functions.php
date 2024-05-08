<?php
function generatePassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+{}|:<>?-=[]\;,./';
    $password = '';
    $charsLength = strlen($chars);
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, $charsLength - 1)];
    }
    return $password;
}

if(isset($_GET['passwordLength'])) {
    $passwordLength = $_GET['passwordLength'];
    $generatedPassword = generatePassword($passwordLength);
    echo "Generated Password: " . $generatedPassword;
}
?>