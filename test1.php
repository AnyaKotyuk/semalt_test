<?php
/**
 * На входе есть произвольная строка не менее 20 слов, разделенная пробелами.
 * Написать функцию которая возвращает массив со  всеми вариациями идущих подряд слов, начиная с 2-х.
 *
 * @param string $string
 * @return array масив з комбінацій слів зі строки $string
 */
function wordsVariations($string)
{
    global $wordsArr;
    // нас цікавлять слова, тож видаляємо окремо стоячі спецсимволи
    $string_formatted = preg_replace(array('/ \W /', '/, /', '/ +/'), ' ', $string);
    $words_arr = explode(' ', $string_formatted);

    for ($i = 2; $i <= count($words_arr); $i++) {
        stringWalker($words_arr, 0, $i);
    }
    foreach ($wordsArr as $k => $word) {
        $wordsArr[$k] = implode(', ', $word);
    }
    return $wordsArr;
}

/**
 * Проганяємо масив зі словами для формування результуючих даних
 *
 * @param array $arr масив слів
 * @param int $offset позиція, з якої на даному етапі відбваєься вибірка слів
 * @param int $i кількість слів, які формуватимуть вихідні дані на даному кроці
 */
function stringWalker($arr, $offset, $i){
    global $wordsArr;

    for ($k = $offset; $k < ($offset + $i); $k++) {
        $output[] = $arr[$k];
    }
    $wordsArr[$i][] = implode(' ', $output);

    if (($offset + $i) < count($arr)) {
        stringWalker($arr, $offset + 1, $i);
    }
}