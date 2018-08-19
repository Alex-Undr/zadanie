<?php

function generateRandomNum($min, $max, $count)
{
  $result=array();
  if($min>$max) return $result;
  $count=min(max($count,0),$max-$min+1);
  while(count($result)<$count) {
    $value=rand($min,$max-count($result));
    foreach($result as $used) if($used<=$value) $value++; else break;
    $result[]=$value;
    sort($result);
  }
  shuffle($result);
  return $result;
}

$number = generateRandomNum(1000000000, 9999999999, 10);
echo "<pre>";
	var_dump($number);
echo "</pre>";