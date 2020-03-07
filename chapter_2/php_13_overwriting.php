<?php

class php_13_overwriting{

public $name="kyaw kyaw";
public function overWrite(){

    echo "My name is ".$this->name;
}

}
class Child extends php_13_overwriting{
public function overWrite(){

    
    echo "My name age is ".$this->name="Oo Oo";
}

}
$bb=new Child();
$bb->overWrite();

?>