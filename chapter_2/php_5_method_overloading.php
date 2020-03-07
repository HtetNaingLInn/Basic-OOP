<?php
class php_5_method_overloading{
    
public function overload($default=20){
    echo "my age is ".$default;
}

}
$mm = new php_5_method_overloading();
$mm->overload(22);
?>