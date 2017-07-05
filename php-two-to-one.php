<?php

/**
 * Combine two strings and return the longest possible sorted string, containing only distinct letters.
 *
 * @param string $a
 * @param string $b
 *
 * @return string
 */
function longest($a, $b)
{
    $str = $a . $b;

    return count_chars($str, 3);
}
