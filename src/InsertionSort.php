<?php

namespace Sort;


/**
 * Class InsertionSort
 * @package Sort
 */
class InsertionSort
{
    /**
     * The insertion sort function
     * source: https://en.wikipedia.org/wiki/Insertion_sort
     * @param array $input
     * @return array
     */
    public function sort(array $input)
    {
        $items = count($input);
        for ($i = 0; $i < ($items - 1); $i++) {
            $key = $i + 1;
            $tmp = $input[$key];
            for ($j = ($i + 1); $j > 0; $j--) {
                if ($tmp < $input[$j - 1]) {
                    $input[$j] = $input[$j - 1];
                    $key = $j - 1;
                }
            }
            $input[$key] = $tmp;
        }
        return $input;
    }
}