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
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
   if($max_number < $a){
     $max_number = $a;
   }
  }
  return $max_number;
  }
  echo max_array(array(11, 27, 4, 18, 6, 1));
  echo "\n";

//課題5
//strip_tags
$str = "<p>タグを取り除きました。</p>";
  echo strip_tags($str);
  echo "\n";
  
//array_push
$numbers = ["一番","二番","三番"];
  array_push($numbers,"四番","五番");
  print_r($numbers);
  
//array_merge
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = [7, 8, 9];
  $array = array_merge($array1, $array2, $array3);
  print_r($array);

//time
$timestamp = time();
  echo $timestamp;
  echo "\n";
  
//mktime
date_default_timezone_set("UTC");
$timestamp = mktime(0, 0, 0, 27, 11, 2019);
  echo $timestamp;
  echo "\n";
  
//date
echo date('Y/m/d');
echo "\n";
 
// 現在日時をフォーマットする
echo date("Y-m-d H:i:s");
echo "\n";
echo date("Y年m月d日 H時i分s秒");
echo "\n";

?>