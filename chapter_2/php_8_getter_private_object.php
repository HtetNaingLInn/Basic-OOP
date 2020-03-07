<?php

class php_8_getter_private_object{

private $name="kyaw kyaw";
public $age=34;

public function getObject(){

    return $this->name;
}
    
}
$pp=new php_8_getter_private_object();
echo $pp->age;
// echo $pp->name;
echo "<br>";
echo $pp->getObject();


?>