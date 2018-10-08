<?php include 'inc/header.php'?>
<div class="title">
    <h1>Static Properties and Static Method</h1>
</div>
<?php 
    class Student{
        //use static keyword before property name
        public static $name = "Jahirul Islam Razu";

        //use static keyword to define method as static method
        public static function display(){
            //use self :: $property_name to access static property
            echo "Static method <br/>";
            echo "Student name is ".self::$name;
        }
    }

    // $stob = new Student;
    // $stob->display();

    //when use static method keyword it is no need to create object of the class just use like Class-Name::Method_Name
    
    Student::display();
?>
<?php include 'inc/footer.php'?>