<?php
/**
 * 12. Написать функцию, которая в качестве аргумента принимает строку,
 * и форматирует ее таким образом, что предложения идут в обратном порядке.<br>
 * Пример:
 * Входная строка:
 *  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';<br><br>
 * Строка, возвращенная функцией :
 * 'А там хоть трава не расти. А ларчик просто открывался. А король-то — голый. А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и ныне там.А Васька слушает да ест.'
 */
$a='А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';
$a=explode('.',$a);
$a = array_filter($a);
krsort($a);
//print_r($a);
foreach ($a as $key=>$val){
    echo $val.'.';
}