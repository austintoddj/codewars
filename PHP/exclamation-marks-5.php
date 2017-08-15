<?php

/**
 * Remove all exclamation marks from the end of words. Words are separated by spaces in the sentence.
 *
 * remove("Hi!");               // "Hi"
 * remove("Hi!!!");             // "Hi"
 * remove("!Hi");               // "!Hi"
 * remove("!Hi!");              // "!Hi"
 * remove("Hi! Hi!");           // "Hi Hi"
 * remove("!!!Hi !!hi!!! !hi"); // "!!!Hi !!hi !hi"
 *
 * @param string $s
 *
 * @return string $str
 */
function remove(string $s): string
{
    $str = explode(" ", $s);

    foreach ($str as &$e) {
        $e = rtrim($e, "!");
    }

    return implode(" ",$str);
}
