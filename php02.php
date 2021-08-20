<?php
$name = "Risa";
if ($name = "Risa"){
    echo "私はRisaです";
} else {
    echo "Risaではありません";
}
$total = 0;
echo $total;
for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
$fruits = array("apple", "orange", "banana", "lemon", "peach");
foreach($fruits as $fruits){
    echo "要素は" . $fruits;
    echo "\n";
}

$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
if($i % 5 == 0){
    echo $i .",";}
}


?>