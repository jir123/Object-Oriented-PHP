<?php include 'inc/header.php'?>
<div class="title">
    <h1>Interface</h1>
</div>
<?php

    //interface has methods without body parts and it declares using interface keyword 
    interface School {
        //without bodypart method
        public function mySchool();
    }

    interface College{
        public function myCollege();
    }

    interface Varsity{
        public function myVarsity();
    }
    //use implements keyword to extends interface class
    class Student implements School, College, Varsity {
        public function __construct(){
            $this->mySchool();
            $this->myCollege();
            $this->myVarsity();
        }
        public function mySchool(){
            echo "I am a school student.<br>";
        }

        public function myCollege(){
            echo "I am a college student.<br>";
        }

        public function myVarsity(){
            echo "I am a Varsity student.<br>";
        }
    }
    //we don't create interface object like 
    //$school = new School; It's not possible
    $student = new Student();
?>
<?php include 'inc/footer.php'?>