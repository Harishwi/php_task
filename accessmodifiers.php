<?php
class User {
    private $username;
    private $password;
    private $emailAddress;

    public function __construct($username, $password, $emailAddress) {
        $this->username = $username;
        $this->password = $password;
        $this->emailAddress = $emailAddress;
    }
    public function setUsername($username) {
        $this->username = $username;
    }
    public function getUsername() {
        return $this->username;
    }
    public function setEmailAddress($emailAddress) {
        $this->emailAddress = $emailAddress;
    }
    public function getEmailAddress() {
        return $this->emailAddress;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function verifyPassword($password) {
        return $this->password === $password;
    }
}
$user = new User("john_doe", "securepassword", "john.doe@example.com");

echo "Username: " . $user->getUsername().", ";
echo "Email Address: " . $user->getEmailAddress().", ";
if ($user->verifyPassword("securepassword")) {
    echo "Password verified.";
} else {
    echo "Password verification failed.";
}
echo "<br>";
$user->setUsername("jane_doe");
echo "Updated Username: " . $user->getUsername().", ";
$user->setEmailAddress("jane.doe@example.com");
echo "Updated Email Address: " . $user->getEmailAddress().", ";
$user->setPassword("newsecurepassword");
if ($user->verifyPassword("newsecurepassword")) {
    echo "Password updated and verified.";
} else {
    echo "Password update failed.";
}
?>
