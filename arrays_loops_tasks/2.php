<?php

$result=0;
foreach([1, 20, 15, 17, 24, 35] as $item){
    echo $key .' = '.$item ."\n";
    $result += $item;
}
echo $result;