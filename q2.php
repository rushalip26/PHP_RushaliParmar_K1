<?php
function calculateArea($length,$width){
    $area=$length*$width;
    return $area;
}
$length=10;
$width=20;
$result=calculateArea($length,$width);
echo "Length and Width is $length and $$width"."<br>";
echo "Area is $result";
?>