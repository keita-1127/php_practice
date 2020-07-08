<?php

//課題1
$name = "小澤啓太";
if ($name = "小澤啓太") {
    echo "私は" . $name . "です";
    echo "\n";
}
else {
    echo "あなたの名前ではありません";
    echo "\n";
}

//課題2
for ($i = 1; $i <= 10000; $i ++) {
    echo $i;
    echo "\n";
}

//課題3
$fruits = array("orange", "grape", "banana", "apple", "peach");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

//課題4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

?>