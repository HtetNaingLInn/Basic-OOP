<?php

class php_7_this_variable{

    public $name="hla hla";


public function changeName(){

$this->name="ko ko";

}
  

}
$obj=new php_7_this_variable();
$obj->changeName();
echo $obj->name;
echo '<br>';
$bb=new php_7_this_variable();
echo $bb->name;
?>