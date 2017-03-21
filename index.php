<?php
//echo "hola mundo";
/*
$array=array
(
    rand(),
    rand(),
    rand(),
    rand(),
    rand(),
);*/

$array=array();

for($i=0;$i<5;$i++)
{
    $array[$i]=rand(1,10);
}
var_dump($array);


?>