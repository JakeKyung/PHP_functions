<?php
/**
 * Create by Jake.
 * checkdate (month, day, year)
 * date (format, timestamp)
 * getdate (timestamp)
 * mktime (hr, min, sec, month, day, yr)
 * strftime (formatstring, timestamp)
 * strtotime (str)
 * time ()
 */

/** get unix time  : time() */
$timestamp = time();
// output : 1675144012 (Unix time)
echo $timestamp;

echo PHP_EOL;

/** strtotime()  : string  형식을 timestamp 으로 변경 */
$now_time = strtotime('now');
echo $now_time;

echo PHP_EOL;

/** unix time to date : date()
 * date( format, timestamp )
 * date(string $format, ?int $timestamp = null): string
 */
$date = date("Y-m-d h:i:s", $timestamp);
echo $date;

echo PHP_EOL;
