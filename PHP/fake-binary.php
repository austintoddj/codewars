<?php

/**
 * Given a string of digits, you should replace any digit below 5 with '0' and any digit 5 and above with '1'. Return the resulting string.
 *
 * @param string $s
 *
 * @return string
 */
function fake_bin(string $s): string
{
    // INITIAL SOLUTION
    // $output = '';

    // foreach (str_split($s) as $num) {
    //     if($num < 5) {
    //       $output .= 0;
    //     } else {
    //       $output .= 1;
    //     }
    // }

    // return $output;

    // REFACTORED SOLUTION
    return preg_replace(array('/[0-4]/', '/[5-9]/'), array('0', '1'), $s);
}
