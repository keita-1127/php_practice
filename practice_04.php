<?php

//課題1
function double($num){
  $result = $num * 2;
  echo $result;
  echo "\n";
}
double(3);

//課題2
function f($a, $b){
  $result = $a + $b;
  echo $result;
  echo "\n";
}
 f(5, 5);
 
 //課題3
function multiply($arr){
  $result = 1;
foreach($arr as $a){
  $result *= $a;
}
  echo $result;
}
  multiply(array(1, 3, 5 ,7, 9));
  echo "\n";
  
//課題4


?>