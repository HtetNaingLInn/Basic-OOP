<?php


require_once('heinter.php');
require_once('sheinter.php');

class inter implements heinter,sheinter{

     private $item;
    
    
    public function heGotoSchool($data){
       $this->item=$data;
    }

    public function sheGotoSchool($data){
        $this->item=$data;
    }
    public function busy(){

        echo "busy with ".$this->item[count($this->item)-1];
    }
    
    
}
$he=["pen","bag","toy"];
$she=["pen","bag","cosematic"];
$bb=new inter();
$bb->heGotoSchool($he);
$bb->busy();
echo "<hr>";
$cc=new inter();
$cc->sheGotoSchool($she);
$cc->busy();


echo "<hr>";
$ff=["one"=>1,"two"=>2];


var_dump($ff);
echo"<hr>";


$obj=(object) $ff;
var_dump($obj);
echo "<br>";

echo $obj->one;


?>