<?php
$var = "ADitya sarrkar";
echo strlen($var);//length of string    
echo "<br>";
echo strrev($var);// reverse of string
echo "<br>";
echo strpos($var,"sar");//position of string
echo "<br>";

$num= 34;
$var1 = 89;
add($num,$var1);
function add($num,$var1){
  echo $num +$var1;
}
 
?>