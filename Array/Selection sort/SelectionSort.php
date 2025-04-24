<?php

/**
 * Worst O(n^2)
 * Average O(n^2)
 * Best O(n^2)
 */
function selectionSort(array $arr): array 
{
    $count = count($arr);
    for ($i = 0; $i < $count - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < $count; $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }   
        if ($min != $i) {
            [$arr[$i], $arr[$min]] = [$arr[$min], $arr[$i]];
        }
    }
    return $arr;
}

$array = [3,4,1,2,5,9,6,7,8];
print_r(selectionSort($array));
