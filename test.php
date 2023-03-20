<?php
abstract class Fruit{
     public $name;
     public function __construct($name)
     {
          $this->name=$name;
     }
     protected function intro() :string{
          return "";
     }
}
class Apple extends Fruit{
     public function intro():string{
          return "I m $this->name \n";
     }
}
class Banana extends Fruit{
     public function intro():string{
          return "I m $this->name \n";
     }
}
class Orange extends Fruit{
     public function intro():string{
          return "I m $this->name \n";
     }
}
$apple=new Apple("apple");
echo $apple->intro();
$banana=new Banana("Banana");
echo $banana->intro();
$orange=new Orange("Orange");
echo $orange->intro();