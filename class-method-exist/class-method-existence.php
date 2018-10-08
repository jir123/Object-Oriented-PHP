<?php include '../inc/header.php'?>
<div class="title">
    <h1>Class Method Existence</h1>
</div>
<?php
    include 'exist.php';

    if(class_exists("Exist")){
        $st = new Exist;
        if(method_exists($st,"live")){
            $st->live();
        }else {
            echo "Method not found";
        }
   
    }else {
        echo "Class not found";
    }
    
?>

<?php include '../inc/footer.php'?>