<?php

foreach([2,3,4] as $e){
        echo in_array($e,[4, 2, 5, 19, 13, 0, 10]) ? "Есть!": "Нет!";
        echo PHP_EOL;
    }