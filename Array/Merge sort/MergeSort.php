<?php

 /**
 * Worst O(n log n)
 * Average O(n log n)
 * Best O(n log n)	
 */ 
function merge(array $arr) : array {
    if (count($arr) < 2) {
        return $arr;
    }
    if (count($arr) == 2) {
        if ($arr[0] <  $arr[1]) {
            return $arr;
        } else {
            return [$arr[1], $arr[0]];
        }
    } 
    $halved = array_chunk($arr, ceil(count($arr)/2)); // пополам
    // разбиваем и сортируем каждую половину
    $h1 = merge($halved[0]);
    $h2 = merge($halved[1]);
    //сливаем
    $res = [];
    for ($i = 0, $j = 0; $i < count($h1) || $j < count($h2); ) {
        if (!isset($h1[$i])) {
            $res[] = $h2[$j];
            $j++;
            continue;
        }
        if (!isset($h2[$j])) {
            $res[] = $h1[$i];
            $i++;
            continue;
        }
       if ($h1[$i] < $h2[$j]) {
           $res[] = $h1[$i];
           $i++;
       } else {
           $res[] = $h2[$j];
           $j++; 
       }
    }
    return $res;
}

var_dump(merge([3,34,1,33,5,213213,99,1,1,0,0, -123]));
