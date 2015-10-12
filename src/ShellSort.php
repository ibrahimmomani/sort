<?php

namespace Sorting;


/**
 * Class ShellSort
 * @package Sorting
 */
class ShellSort
{
    /**
     * The shell sort function
     * source: https://en.wikipedia.org/wiki/Selection_sort
     * @param array $input
     * @return array
     */

    public function sort(array $input)
    {
        $items = count($input);
        $mid = floor($items / 2);
        while ($mid > 0) {
            for ($i = 0; $i < ($items - $mid); $i++) {
                $j = $i;
                while ($j >= 0 && $input[$j] > $input[$j + $mid]) {
                    list($input[$j], $input[$j + $mid]) = array($input[$j + $mid], $input[$j]);
                    $j--;
                }
            }
            $mid = floor($mid / 2);
        }

        return $input;
    }

}