<?php
/**
 * Реализовать алгоритм  извлечения числовых значений со строки в виде функции:
 * This server has 386 GB RAM and 5000 GB storage
 *
 */

/**
 * Get numbers from the string
 *
 * @param $string
 * @return array $numbers
 */
function getNumbers($string)
{
    preg_match_all("/(\d+( [a-zA-Z]+)?)/", $string, $matches);
    $numbers = $matches[0];
    return $numbers;
}
