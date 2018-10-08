<?php include 'inc/header.php'?>
<div class="title">
    <h1>Inheritance</h1>
</div>
<?php
    class Parents{
        public $name;
        public $age;

        public function __construct($n, $a){
            $this->name = $n;
            $this->age = $a;
        }

        public function display(){
            echo "Student name is {$this->name} and age is {$this->age}";
        }
    }
    //extend is used for inheritance
    class Child extends Parents {
        public $level;
        //overide the method display() and sub class take priority to sub class method 
        public function display(){
            echo "Student name is {$this->name} , age is {$this->age} and student level is  {$this->level}";
        }
    } 

    $user = "Ariful Islam";
    $age = "18";
    $parents = new Parents($user, $age);
    $parents->display();

    echo "</br>";

    $use = "Shimul Shakh";
    $age = "22";
    $child = new Child($use, $age);
    $child->level = "Administrator";
    $child->display();

?>

<?php include 'inc/footer.php'?>