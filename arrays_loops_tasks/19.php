<?php

$arr = array("Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье");
foreach ($arr as $ar) {
    $day = date("Суббота");
    if ($ar == $day) {
        echo "<i>$ar</i><br>";
    } else {
        echo $ar . "<br>";
    }
}
$i=1;