<?php

/**
 * It's pretty straightforward. Your goal is to create a function that removes the first and last characters of a string. You're given one parameter.
 *
 * @param string $s
 *
 * @return string
 */
function remove_char(string $s): string
{
  return preg_replace('/^.|.$/', "", $s);
}
