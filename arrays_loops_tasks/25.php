<?php
/**
 * 25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
 * найти максимальное и минимальное значение и поменять их местами.
 */
for($i=0; $i<10; $i++) {
    $arr[$i] = rand(0,10);
}
print_r($arr);

$max_arr=max($arr);
$min_arr=min($arr);

$min_key = array_search($min_arr, $arr);
$max_key = array_search($max_arr, $arr);

$arr[$min_key] = $max_arr;
$arr[$max_key] = $min_arr;

print_r($arr);