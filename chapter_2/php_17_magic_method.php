<?php

class php_17_magic_method{
    public $name="hla hla";

public function __get($name){
    echo "your are trying to call {$name}.<hr>";
}

public function __set($name, $value)
{
    echo "your are trying to acees propertiy {$name} of value is {$value} <hr>";
}

public function __call($name, $arguments)
{
    echo "your trying to call non existing method {$name} with argument ";
    echo "<pre>". print_r($arguments)."</pre> <hr>";
}
public static function __callStatic($name, $arguments)
{
    echo "your trying to call non exist static method {$name} with argument ";
    echo "<pre>". print_r($arguments)."</pre>";
}

}

//serialize ka object to string ->auto work in class magic method is __sleep
//unserialize ka string to object->auto work in class magic method is __wakeup
//echo $bb ->auto work in calss magic method is __tostring
//echo $bb(); ->auto work in class magic method is __invole
/*class use clone 

$bb= clone $cc 
$cc->name; clone can be use properity from class
->auto work in class magic method is __clone


*/

$bb=new php_17_magic_method();
$bb->age;
$bb->firend=2;
$bb->hey("joker","holo");
php_17_magic_method::hey("mg mg","kyaw kyaw");




?>