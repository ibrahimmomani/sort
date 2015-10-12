<?php

namespace Sort;


/**
 * Class GnomeSort
 * @package Sort
 */
class GnomeSort
{
    /**
     * The gnome sort function
     * source: https://en.wikipedia.org/wiki/Gnome_sort
     * @param array $input
     * @return array
     */

    public function sort(array $input)
    {
        $items = count($input);
        $i = 1;
        $j = 2;
        while ($i < $items) {
            if ($input[$i - 1] < $input[$i]) {
                $i = $j;
                $j++;
            } else {
                list($input[$i], $input[$i - 1]) = array($input[$i - 1], $input[$i]);
                $i--;
                if ($i == 0) {
                    $i = $j;
                    $j++;
                }
            }
        }
        return $input;
    }

}