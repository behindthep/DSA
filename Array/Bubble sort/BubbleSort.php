<?php

/**
 * Worst O(n^2)
 * Average O(n^2)
 * Best O(n)
 */
function bubbleSort(array $array): array {
    $length = count($array);
    for ($i = $length - 1; $i > 0; $i--) {
        $changes = false;
        for ($j = 0; $j < $i; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                [$array[$j], $array[$j + 1]] = [$array[$j + 1], $array[$j]];
                $changes = true;
            }
        }
        if (!$changes) {
            return $array;
        }
    }


    return $array;
}

print_r(bubbleSort([5, 25, 10, 7, 6, 20, 21, 1, 2, 13]));
