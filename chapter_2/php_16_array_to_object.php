<?php
$b=["one"=>1,"two"=>2,"three"=>3,"four"=>"four"];

echo $b["three"];
echo "<hr>";
var_dump($b);

echo "<hr>";
$obj= (object) $b; // (object) keywords change array to object 

var_dump($obj);
echo "<hr>";
echo $obj->three;

?>