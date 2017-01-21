<?php

$number = 123;
$number=(str_split($number));
$result=0;
for ($i=0;$i<count($number);$i++){
    $result+=$number[$i];
}
echo 'Сумма цифр = '.$result;