<?php
interface human{

public function header();
public function body();
public function footer();


}

class php_18_inteface implements human{

    public function header(){
        echo "i am header <br>";
    }
    public function body(){
        echo "i am body <br>";
    }
    public function footer(){
        echo "i am footer ";
    }
    

}
$bb=new php_18_inteface();
$bb->header();
$bb->body();
$bb->footer();


?>