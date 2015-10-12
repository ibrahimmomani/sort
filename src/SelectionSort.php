<?php

namespace Sort;

/**
 * Class SelectionSort
 * @package Sort
 */
class SelectionSort
{
    /**
     * The selection sort function
     * source: https://en.wikipedia.org/wiki/Selection_sort
     * @param array $input
     * @return array
     */
    public function sort(array $input)
    {
        $items = count($input);
        for ($i = 0; $i < ($items - 1); $i++) {
            $key = $i;
            for ($j = ($i + 1); $j < $items; $j++) {
                if ($input[$j] < $input[$key]) $key = $j;
            }
            if ($key != $i) {
                list($input[$key], $input[$i]) = array($input[$i], $input[$key]);
            }
        }
        return $input;
    }
}