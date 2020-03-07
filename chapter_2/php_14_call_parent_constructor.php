<?php
class php_14_call_parent_constructor{

public function __construct()
{
    echo "Parent is stat working"."<br>";
}



}
class Child extends php_14_call_parent_constructor{
public $age=20;
    public function __construct()
    {
        parent::__construct();
        echo "Chlild is Start Working"."<br>";
    }
}
$bb=new Child();
echo $bb->age

?>