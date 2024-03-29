<?php
/**
 * Create by Jake 2023/03/13.
 */
function quickSort($array)
{
    if (!$length = count($array)) {
        return $array;
    }

    $k = $array[0];
    $x = $y = [];

    for ($i = 1; $i < $length; $i++) {
        if ($array[$i] <= $k) {
            $x[] = $array[$i];
        } else {
            $y[] = $array[$i];
        }
    }

    return array_merge(quickSort($x), [$k], quickSort($y));
}
$list = [1, 9, 4, 7, 5];
$list_sort = quickSort($list);
print_r($list_sort);
