<?php

$arr=array("Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь");

foreach($arr as $ar){
    $month=date("Январь");
    if ($ar==$month){
        echo "<b>$ar</b></br>";
    }else{
        echo($ar)."<br>";}
}