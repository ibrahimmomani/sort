<?php

use Sort\BubbleSort;

class BubbleSortTest extends PHPUnit_Framework_TestCase
{
    public $testData = [];
    public $actualData = [];
    public $expectedData = [];
    public $bubbleSortObject;

    public function setUp()
    {
        $this->testData = [2, 5, 1, 6, 7];
        $this->expectedData = [1, 2, 5, 6, 7];
        $this->bubbleSortObject = new BubbleSort();
    }

    public function testInsertionSort()
    {
        $this->actualData = $this->bubbleSortObject->sort($this->testData);
        $this->assertEquals($this->expectedData , $this->actualData);
    }
}
