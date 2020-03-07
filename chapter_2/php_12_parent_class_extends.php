<?php
class php_12_parent_class_extends{
public $name="lu lu";
public $age=20;
public function friendCount(){
    echo "i am friendCount methods";
    
    
}


}
class Child extends php_12_parent_class_extends{


}
$bb=new Child();

echo $bb->name;
echo "<br>";
echo $bb->age;
$bb->friendCount();

?>