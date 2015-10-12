<?php

use Sort\InsertionSort;

class InsertionSortTest extends PHPUnit_Framework_TestCase
{
    public $testData = [];
    public $actualData = [];
    public $expectedData = [];
    public $insertionSortObject;

    public function setUp()
    {
        $this->testData = [2, 5, 1, 6, 7];
        $this->expectedData = [1, 2, 5, 6, 7];
        $this->insertionSortObject = new InsertionSort();
    }

    public function testInsertionSort()
    {
        $this->actualData = $this->insertionSortObject->sort($this->testData);
        $this->assertEquals($this->expectedData, $this->actualData);
    }

}
