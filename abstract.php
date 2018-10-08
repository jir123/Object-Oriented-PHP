<?php include 'inc/header.php'?>
<div class="title">
    <h1>Abstract class</h1>
</div>
<?php

   //abstract class starts with abstract keyword
   abstract class School{
       public $name;
       public $code;
       public function display(){
           echo "{$this->name} code is {$this->code}";
       }
       //abstract method class must be abstract.
       abstract public function describe();
   }

   class Student extends School{
       public function details(){
           return parent::display()." And It has also a college part.<br>";
       }

       public function describe(){
           return "There also has a low collage in this school.";
       }
   }
   //We will not create object directly of an abstract class
   // $object = new School;
   $object = new Student;
   $object->name = "Badda Alatunnesa High School";
   $object->code = "1928";
   // $object->display();
   echo $object->details();
   echo $object->describe();
?>

<?php include 'inc/footer.php'?>