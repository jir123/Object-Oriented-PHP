<?php include "inc/header.php"?>
<div class="title">
    <h1>Constant</h1>
</div>
<?php

    class Student{
        //Constant access modifiers is by default public, so should not be needed to use access modifiers. Constant declare without $ symbole and it's value is fixed 
        const NAME = "Jahirul Islam Razu";
        //method 
        public function details(){
            //Constant execute like this "class_name::constant_name"
            echo "Student name is ".Student::NAME;
        }
    }

    $stob = new Student;
    $stob->details();

?>
<?php include "inc/footer.php"?>