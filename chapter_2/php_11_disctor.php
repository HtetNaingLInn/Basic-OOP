<?php

class php_11_disctor{

    public function __construct()
    {
        echo "Starting Constructor";
    }


    public function __destruct()
    {
        echo "Closing class";
    }
}

$bb=new php_11_disctor();

?>