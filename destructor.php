<?php include "inc/header.php"?>
<div class="title">
    <h1>Destructor</h1>
</div>

<?php
    //class
    Class Student{
        public $studntId;
        //method
        public function setId($id){
            $this->studentId = $id;
            // echo $id;
        }

        public function __destruct(){
            if(!empty($this->studentId)){
                echo "Save student id";
            }

            //real life use as to close database connection
            mysql_close();
        }
    }

    $stob = new Student;
    $stob->setId(12);
    //when a class object end his work then destructor will start his work
    unset($stob);
?>
<?php include "inc/footer.php"?>