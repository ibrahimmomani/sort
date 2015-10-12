<?php

use Sorting\CountingSort;

class CountingSortTest extends PHPUnit_Framework_TestCase
{
    public $testData = [];
    public $actualData = [];
    public $expectedData = [];
    public $countingSortObject;

    public function setUp()
    {
        $this->testData = [2, 5, 1, 6, 7];
        $this->expectedData = [1, 2, 5, 6, 7];
        $this->countingSortObject = new CountingSort();
    }

    public function testInsertionSort()
    {
        $this->actualData = $this->countingSortObject->sort($this->testData);
        $this->assertEquals($this->expectedData, $this->actualData);
    }
}
