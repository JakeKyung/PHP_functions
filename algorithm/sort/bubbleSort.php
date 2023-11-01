<?php
/**
 * Create by Jake 2023/03/13.
 */
function bubbleSort($array)
{
    if (!$length = count($array)) {
        return $array;
    }
    for ($outer = 0; $outer < $length; $outer++) {
        for ($inner = 0; $inner < $length; $inner++) {
            if ($array[$outer] < $array[$inner]) {
                $tmp = $array[$outer];
                $array[$outer] = $array[$inner];
                $array[$inner] = $tmp;
            }
        }
    }

    return $array;
}

$list = [1, 9, 4, 7, 5];
$list_sort = bubbleSort($list);
print_r($list_sort);
