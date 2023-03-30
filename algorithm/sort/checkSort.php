<?php
/**
 * Create by Jake 2023/03/13.
 */
function checkSort($array){
    if (!$length = count($array)) {
        return true;
    }
    for ($i = 0; $i < $length; $i++) {
        if (isset($array[$i+1])) {
            if ($array[$i]>$array[$i+1]) {
                return false;
            }
        }
    }
    return $array;
}
$list = array(1,9,4,7,5);
$list_sort = checkSort($list);
print_r($list_sort);