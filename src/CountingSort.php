<?php
/**
 * Created by PhpStorm.
 * User: ibrahimmomani
 * Date: 10/12/15
 * Time: 6:26 AM
 */

namespace Sorting;


/**
 * Class CountingSort
 * @package Sorting
 */
class CountingSort
{
    /**
     * The selection sort function
     * source: https://en.wikipedia.org/wiki/Counting_sort
     * @param array $input
     * @return array
     */

    public function sort(array $input)
    {
        $max = max($input);
        $c = array();
        $items = count($input);
        for ($i = 0; $i <= $max; $i++)
            $c[$i] = 0;
        for ($i = 0;$i < $items; $i++) {
            $c[$input[$i]]++;
        }
        $b = 0;
        for ($j = 0;$j <= $max; $j++) {
            for ($i = 0; $i < $c[$j]; $i++) {
                $input[$b] = $j;
                $b++;
            }
        }

        return $input;
    }
}