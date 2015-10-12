<?php
namespace Sorting;


/**
 * Class BubbleSort
 * @package Sorting
 */
class BubbleSort
{
    /**
     * The bubble sort function
     * source: https://en.wikipedia.org/wiki/Bubble_sort
     * @param array $input
     * @return array
     */

    public function sort(array $input)
    {
        $items = count($input);
        for ($j = 0; $j < ($items - 1); $j++) {
            $swapped = false;
            for ($i = 0; $i < ($items - $j - 1); $i++) {
                if ($input[$i] > $input[$i + 1]) {
                    list($input[$i], $input[$i + 1]) = array($input[$i + 1], $input[$i]);

                    if (!$swapped)
                        $swapped = true;
                }
            }
            if (!$swapped) break;
        }

        return $input;
    }

}