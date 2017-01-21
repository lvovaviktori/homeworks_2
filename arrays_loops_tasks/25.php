<?php

for($i=0; $i<10; $i++) {
    $arr[$i] = rand(0,10);
}
print_r($arr);
$max_arr=max($arr);
$min_arr=min($arr);

echo $max_arr."\n";
echo $min_arr;