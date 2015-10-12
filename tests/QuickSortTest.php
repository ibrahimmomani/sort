<?php

use Sorting\QuickSort;

class QuickSortTest extends PHPUnit_Framework_TestCase
{
    public $testData = [];
    public $actualData = [];
    public $expectedData = [];
    public $quickSortObject;

    public function setUp()
    {
        $this->testData = [2, 5, 1, 6, 7];
        $this->expectedData = [1, 2, 5, 6, 7];
        $this->quickSortObject = new QuickSort();
    }

    public function testInsertionSort()
    {
        $this->actualData = $this->quickSortObject->sort($this->testData);
        $this->assertEquals($this->expectedData, $this->actualData);
    }

}
