<?php
/**
 * Create by Jake 2023/03/13.
 */
function insertionSort($my_array)
{
    for ($i = 0; $i < count($my_array); $i++) {
        $val = $my_array[$i];
        $j = $i - 1;
        while ($j >= 0 && $my_array[$j] > $val) {
            $my_array[$j + 1] = $my_array[$j];
            $j--;
        }
        $my_array[$j + 1] = $val;
    }

    return $my_array;
}

$list = [3, 0, 2, 5, -1, 4, 1];
$list_sort = insertionSort($list);
print_r($list_sort);
