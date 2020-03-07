<?php

class php_4_aceeess_method_from_class {
    public $name="mg mg";
    public $age =123;

    public function access($name){

        echo "Welcome from my world " . $name;

    }
}
$bb=new php_4_aceeess_method_from_class();
echo $bb->name;
echo '<br>';
$bb->access("Myanmar");


?>