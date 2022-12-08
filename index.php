<?php
 define("a",1);
function mine(){
   
    echo "x value is :";
}
mine();
echo a ;
echo "hi welcome to php to";

$x = 5;
$y = 10;
function myTest() {
  global $x, $y;
  $y = $x + $y;
}
myTest();
echo $y; // outputs 15
$bool="true";
echo "<br>";
print $bool ;

?>