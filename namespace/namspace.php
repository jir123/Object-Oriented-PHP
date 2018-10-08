<?php include '../inc/header.php'?>
<div class="title">
    <h1>Namespace</h1>
</div>
<?php
    include 'school.php';
    include 'college.php';

    //use as a ellious
    use jir\college\live\College as col;
    $school = new jir\School(); 
    $college = new col();

?>
<?php include '../inc/footer.php'?>