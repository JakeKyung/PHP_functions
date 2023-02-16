<?php
/*
* isset(mixed $var, mixed ...$vars): bool
* 변수에 값이 있는 경우 true
* 변수가 선언되어 있지 않거나, null 인 경우 false
*/
function issetCheck($s) {
    if(isset($s)) {
        echo "변수안에 값이 선언되어 있습니다.";
    } else {
        echo "변수가 null 이거나 선언되어 있지 않은 경우";
    }
}

$s = '값이 있음';
issetCheck($s);
echo PHP_EOL; // output : 변수안에 값이 선언되어 있습니다.

$s_n = null;
issetCheck($s_n);
echo PHP_EOL; // output : 변수가 null 이거나 선언되어 있지 않은 경우

$empty_string = ''; // ''(공백)도 문자열로 판단
issetCheck($empty_string); // output : 변수안에 값이 선언되어 있습니다.
