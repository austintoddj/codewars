<?php

/**
 * This is the first step to understanding FizzBuzz.
 *
 * Your inputs: a positive integer, n, greater than or equal to one. n is provided, you have NO CONTROL over its value.
 *
 * Your expected outputs: an array of positive integers from 1 to n
 *
 * Your job is to write an algorithm that gets you from the input to the output.
 *
 * @param int $n
 *
 * @return array
 */
function pre_fizz(int $n)
{
    // My initial solution
    // $output = [];
    // $start = 1;

    // for($x = 5 - $n; $x < 5; $x++) {
    //     $output[] = $start++;
    // }

    // return $output;

    // Simplified and refactored solution
    return range(1, $n);
}
