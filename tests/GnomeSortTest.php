<?php

use Sorting\GnomeSort;

class GnomeSortTest extends PHPUnit_Framework_TestCase
{
    public $testData = [];
    public $actualData = [];
    public $expectedData = [];
    public $gnomeSortObject;

    public function setUp()
    {
        $this->testData = [2, 5, 1, 6, 7];
        $this->expectedData = [1, 2, 5, 6, 7];
        $this->gnomeSortObject = new GnomeSort();
    }

    public function testInsertionSort()
    {
        $this->actualData = $this->gnomeSortObject->sort($this->testData);
        $this->assertEquals($this->expectedData, $this->actualData);
    }

}
