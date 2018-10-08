<?php include 'inc/header.php'?>
<div class="title">
    <h1><pre>Magic method__get($property)</pre></h1>
</div>
<?php
    //__get($property) is a magic method. Undefince property can be printed by __get($property) method. 
    //__set($property, $value). We can assign value bset property 
    //__call($property, $arg_array)
    class Student{
        
        public function print(){
            echo "I am a student.</br>";
        }

        public function __get($property){
            echo "$property is a property of __get() method.</br>";
        }

        public function __set($property, $value){
            echo "($property->$value) Here $property is property and $value is assigned value.<br>";
        }

        public function __call($pm, $value){
            echo "There is no <b>$pm</b> method and arguments are ".implode(',',$value);
        }
    }

    $st = new Student;
    $st->print();
    $st->Variable;
    $st->Number = 200; 
    $st->notExistMethod('7','4','9');

?>
<?php include 'inc/footer.php'?>