<?php

use Sorting\ShellSort;

class ShellSortTest extends PHPUnit_Framework_TestCase
{
    public $testData = [];
    public $actualData = [];
    public $expectedData = [];
    public $shellSortObject;

    public function setUp()
    {
        $this->testData = [2, 5, 1, 6, 7];
        $this->expectedData = [1, 2, 5, 6, 7];
        $this->shellSortObject = new ShellSort();
    }

    public function testInsertionSort()
    {
        $this->actualData = $this->shellSortObject->sort($this->testData);
        $this->assertEquals($this->expectedData, $this->actualData);
    }


}
