<?php

/**
 * A palindrome is a word, phrase, number, or other sequence of characters which reads the same backward or forward.
 * Allowances may be made for adjustments to capital letters, punctuation, and word dividers.
 *
 * @param string $line
 *
 * @return string
 */
function is_palindrome($line)
{
    return $line == strrev($line);
}
