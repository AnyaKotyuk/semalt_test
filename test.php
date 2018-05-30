<?php
/**
 * Testing of test1 and test2
 */

require_once 'test1.php';
require_once 'test2.php';

$string = 'A ? lead    54 generating ,   * # & website';
print_r(wordsVariations($string));

$string = 'This server has 386 GB RAM and 5000 GB storage 6 909 ';
print_r(getNumbers($string));