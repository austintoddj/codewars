<?php

/**
 * This time no story, no theory. The examples below show you how to write function accum:
 *
 * accum("abcd");    // "A-Bb-Ccc-Dddd"
 * accum("RqaEzty"); // "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
 * accum("cwAt");    // "C-Ww-Aaa-Tttt"
 *
 * @param string $str
 *
 * @return string
 */
function accum($str)
{
    $parts = [];

    foreach (str_split($s) as $index => $part) {
      $parts[] = strtoupper($part) . str_repeat(strtolower($part), $index);
    }

    return implode('-', $parts);
}
