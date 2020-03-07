<?php
class php_9_setter_private_object{
private $name="aung Aung";

public function setter($date){
    return $this->name=$date;
}

}
$pp=new php_9_setter_private_object();
echo $pp->setter("linn linn");

?>