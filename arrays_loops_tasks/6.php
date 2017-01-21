<?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = [];
$ru = [];
foreach ($arr as $item_en =>$item_ru){
    $en [] = $item_en;
    $ru [] = $item_ru;
}
var_dump ($en,$ru);
