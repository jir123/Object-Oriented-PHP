<?php include 'inc/header.php'?>
<div class="title">
    <h1>Access Modifiers</h1>
</div>
<?php
//The access modifiers in php are
//public
//private
//protected

class Super{
   //public can be accessed in anywhere in superclass or subclass or outer class
   public $name = "Ali Ahamed";
   //private can be accessed in only same class or only in same method if declared in the method
   private $age = "18";
   //protected can be accessed in super and sub class but not outer from class
   protected $department = "CSE";
   public function display(){
       //accessing name properties inside supper class
       echo "Inside the supper class ".$this->name."<br/> Age is ".$this->age."</br> Department is ".$this->department."<br>";

   }
}

class Sub extends Super{
 
   public function display(){
       //accessing name properties inside supper class
       echo "Inside the supper class".$this->name."<br/>";
       echo "<br>";
       echo "Inside the subclass".$this->name."</br>";
       //can not be accessed private
       echo "Age is ".$this->age."</br>";
       //protected can be accessed from subclass
       echo "Department is ".$this->department."<br>";

   }
}

$suob = new Super;
$suob->display();
$sub = new Sub;
$sub->display();
echo "<br>";
echo "Accessing protected from outer not possible".$protected = $this->department;
?>

<?php include 'inc/footer.php'?>