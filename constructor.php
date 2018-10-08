
<?php include "inc/header.php"?>

<div class="title">
    <h1>Constructor</h1>
</div>
    
<?php
//class 
Class Student {
    //properties
    public $name;
    public $dept;

    //constructor is loaded automatically 
    public function __construct($n, $d){
        $this->name = $n;
        $this->dept = $d;
    }

    public function details(){
        echo "Student name is {$this->name}<br/>";
        echo "Student Department is {$this->dept}";
    }

}
//object
$stob = new Student("Jahirul Islam Razu", "Computer Science");
$stob->details();
?>

<?php include "inc/footer.php"?>