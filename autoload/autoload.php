<?php include '../inc/header.php'?>
<div class="title">
    <h1>Autoloading Class</h1>
</div>
<?php
    // include 'classes/java.php';
    // include 'classes/ruby.php';
    // include 'classes/php.php';
//__autoload($class_name) to auto load 
    // function __autoload($class_name){
    //     // echo "$class_name.<br/>";
    //     include "classes/".$class_name.".php";
    // }

    spl_autoload_register(function($class_name){
        include "classes/".$class_name.".php";
    });

    $java = new Java;
    $ruby = new Ruby;
    $php  = new Php;

    //method chaning like $object->method1()->method2(); To make method chaning must be use 'return $this' into method to find method instance
    echo "<br><br>";
    $mc = new Chaning;
    $mc->method1()->method2()->method3()->method4();

    echo "<br><br>";
    $cal = new Calculation;
    echo "Result is ".$cal->getValue(7, 5)->getResult();
?>
<?php include '../inc/footer.php'?>