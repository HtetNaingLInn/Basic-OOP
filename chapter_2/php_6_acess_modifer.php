<?php
class php_6_acess_modifer{
    public $name="aung aung";
private $age=12;

}


$bb=new php_6_acess_modifer();
echo $bb->name;
//echo $bb->age; error cannot acess private object

?>