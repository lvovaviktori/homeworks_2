<?php

$num=0;
for ($n=1000;$n>50;$n/=2) {
    $num++;
    echo "$num =  $n"."\n";
}
echo 'Сума = '.$num;