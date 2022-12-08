<?php
class Details{
    public $name;
    public $age;
    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    public function msg(){
         return "Name is:" . $this->name . "Age is" . $this->age;
    }
    
}
$myDetails=new Details("Yaga","24");
echo $myDetails -> msg();
?>