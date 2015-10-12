<?php

use Sort\SelectionSort;

class SelectionSortTest extends PHPUnit_Framework_TestCase
{
    public $testData = [];
    public $actualData = [];
    public $expectedData = [];
    public $selectionSortObject;

    public function setUp()
    {
        $this->testData = [2, 5, 1, 6, 7];
        $this->expectedData = [1, 2, 5, 6, 7];
        $this->selectionSortObject = new SelectionSort();
    }

    public function testInsertionSort()
    {
        $this->actualData = $this->selectionSortObject->sort($this->testData);
        $this->assertEquals($this->actualData, $this->expectedData);
    }

}
