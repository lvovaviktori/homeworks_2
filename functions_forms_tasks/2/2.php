<?php
/**
 *2. Создать форму с элементом textarea.
 * При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
 * Реализовать с помощью функции.
 */
include '2.html';
$a=$_POST['a'];

$separator = ' ';
$words = explode($separator, $a);
$result = [];

foreach ($words as $word) {
    $result[$word] = mb_strlen($word);
}

arsort($result);

$result = array_slice($result, 0, 3);
print_r($result);