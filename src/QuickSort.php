<?php

namespace Sort;


/**
 * Class QuickSort
 * @package Sort
 */
class QuickSort
{
    /**
     * The quick sort function
     * source: https://en.wikipedia.org/wiki/Quick_sort
     * @param array $input
     * @return array
     */
    public function sort(array &$input, $left = 0, $right = 0)
    {
        if ($right == 0)
            $right = count($input) - 1;

        $i = $left;
        $j = $right;
        $x = $input[($left + $right) / 2];

        do {
            while ($input[$i] < $x)
                $i++;

            while ($input[$j] > $x)
                $j--;

            if ($i <= $j) {
                if ($input[$i] > $input[$j])
                    list($input[$i], $input[$j]) = array($input[$j], $input[$i]);

                $i++;
                $j--;
            }
        } while ($i <= $j);

        if ($i < $right)
            $this->sort($input, $i, $right);
        if ($j > $left)
            $this->sort($input, $left, $j);

        return $input;
    }
}