<?php include 'inc/header.php'?>
<div class="title">
    <h1>Polymorphism</h1>
</div>
<?php

//polymorphism
//When  we start to extend classes, and add functionality to them which wasn't there previously, and even override existing method (functions), this is called polymorphism

//The basis of polymorphism is Inheritance and overridden method

class User{
    public $name;
    public $age;

    public function __construct($userName, $userAge){
        $this->name = $userName;
        $this->age = $userAge;
    }

    public function display(){
        echo "Name :{$this->name} and Age :{$this->age}<br>";

    }

}

class Admin extends User {
    public $role;
    public function display(){
        echo "Name :{$this->name} and Age :{$this->age} and Role of user is {$this->role}<br>";

    }
}

$name = "Al Amin";
$age = "24";

$object = new User($name, $age);
$object->display();
echo "<br>";
$admin = new Admin($name, $age);
$admin->role = "Admin";
$admin->display();
?>
<?php include 'inc/footer.php'?>