<?php
class Validation {
    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function validatePassword($password) {
        if (strlen($password) < 8) {
            return false;
        }
        if (!preg_match('/[A-Za-z]/', $password)) {
            return false;
        }
        if (!preg_match('/[0-9]/', $password)) {
            return false;
        }
        if (!preg_match('/[\W_]/', $password)) {
            return false;
        }
        return true;
    }
}

$email1 = "test@example.com";
$email2 = "invalid-email";

echo "Email validation:\n";
echo "$email1 is " . (Validation::validateEmail($email1) ? "valid" : "invalid".", ");
echo "$email2 is " . (Validation::validateEmail($email2) ? "valid" : "invalid".".");
echo "<br>";
$password1 = "Password123!";
$password2 = "weakpass";

echo "\nPassword validation:\n";
echo "'$password1' is " . (Validation::validatePassword($password1) ? "valid" : "invalid").", ";
echo "'$password2' is " . (Validation::validatePassword($password2) ? "valid" : "invalid").".";
?>
