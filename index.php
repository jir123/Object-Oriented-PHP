
<?php include "inc/header.php"?>

<div class="title">
    <h1>Class, Method and Object</h1>
</div>
    
<?php
//class 
Class Student {
    //properties
    public $name = "Jahirul Islam Razu";
    public $dept;
    public $id;
    //method
    public function studentName(){
        echo "Student Name : {$this->name} <br> Department : {$this->dept}";
    }

    public function studentId($value){
        $this->id = $value;
        return $value;
    }
}
//object
$stob = new Student;
$stob->dept = "Computer Science";
$stob->studentName();
echo "</br>";
$result = $stob->studentId("2001");
echo $result;

?>

<?php include "inc/footer.php"?>