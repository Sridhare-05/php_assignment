<?php

class User {
    private $username;
    private $password;
    private $email;


    public function __construct($username, $password, $email) {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($newUsername) {
        $this->username = $newUsername;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($newEmail) {
        $this->email = $newEmail;
    }


    public function changePassword($oldPassword, $newPassword) {
        
        if ($this->password == $oldPassword) {
            $this->password = $newPassword;
            echo "UpdatedPassword: ".$this->password;
        } else {
            return false;
        }
    }
}


$user = new User('sridhar', 'password123', 'sridhar@whereitz.com');

echo "Username: " . $user->getUsername() . "<br>"; 
echo "Email: " . $user->getEmail() . "<br>"; 
$user->setUsername('Sridhar05');
$user->setEmail('sridhar.elumalai@whereitz.com');

echo "Updated Username: " . $user->getUsername() . "<br>"; 
echo "Updated Email: " . $user->getEmail() . "<br>"; 
$user->changePassword('password123', 'password456');


?>
