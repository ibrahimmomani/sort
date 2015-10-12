<?php

namespace Sorting;


/**
 * Class CocktailSort
 * @package Sorting
 */
class CocktailSort
{
    /**
     * The insertion sort function
     * source: https://en.wikipedia.org/wiki/Cocktail_sort
     * @param array $input
     * @return array
     */

    public function sort(array $input)
    {
        $items = count($input);
        $left = 0;
        $right = $items - 1;
        do {
            for ($i = $left; $i < $right; $i++) {
                if ($input[$i] > $input[$i + 1]) {
                    list($input[$i], $input[$i + 1]) = array($input[$i + 1], $input[$i]);
                }
            }
            $right -= 1;
            for ($i = $right; $i > $left; $i--) {
                if ($input[$i] < $input[$i - 1]) {
                    list($input[$i], $input[$i - 1]) = array($input[$i - 1], $input[$i]);
                }
            }
            $left += 1;
        } while ($left <= $right);

        return $input;
    }
}