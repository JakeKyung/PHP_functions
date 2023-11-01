<?php
/**
 * Create by Jake 2023/03/13.
 * 입력된 숫자에 중복제거, 정렬.
 */
$n = fgets(STDIN);
$list = trim(fgets(STDIN));
$list = explode(' ', $list);
$list_count = count($list);

if ($n != $list_count) {
    echo '입력된 숫자 개수가 옳바르지 않습니다.';
    exit;
}

function bsort($string)
{
    $array = explode(' ', $string);
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

$list_unique = array_unique($list);
$string = implode(' ', $list_unique);
$result = bsort($string);
$result = implode(' ', $result);
echo $result;

// 7
// 1 1 3 3 3 2 2
// output : 1 2 3

// 10
// 7 3 6 8 4 10 2 8 8 2
// output : 2 3 4 6 7 8 10
