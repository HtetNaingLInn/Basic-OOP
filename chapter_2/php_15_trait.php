<?php

trait first{
public $name="ko ko";
}

trait second {

    public function secondTrait(){
        echo "Second Trait is Working";
    }
}
trait third {

    public function thirdTrait(){

        echo "Third Trait is Working";
    }
}

trait Papa{
    use first,second,third;
}
class php_15_trait{

    use Papa;
}
$bb=new php_15_trait();
$bb->secondTrait();
echo $bb->name;








?>