<?php

class Validation {
    
    public static function validateEmail($email) {
        
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public static function validatePassword($password) {

        if (preg_match('/^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-zA-Z])[0-9a-zA-Z!@#$%^&*]{8,}$/', $password)) {
            return true;
        } else {
            return false;
        }
    }
}

$email = "yuvaraj@whereitz.com";
$password = "yuvaraj@123";

if (Validation::validateEmail($email)) {
    echo "Email is valid."."<br>";
} else {
    echo "Email is invalid.\n";
}

if (Validation::validatePassword($password)) {
    echo "Password is valid.\n";
} else {
    echo "Password is invalid.\n";
}

?>
