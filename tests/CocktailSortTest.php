<?php

use Sort\CocktailSort;

class CocktailSortTest extends PHPUnit_Framework_TestCase
{
    public $testData = [];
    public $actualData = [];
    public $expectedData = [];
    public $cocktailSortObject;

    public function setUp()
    {
        $this->testData = [2, 5, 1, 6, 7];
        $this->expectedData = [1, 2, 5, 6, 7];
        $this->cocktailSortObject = new CocktailSort();
    }

    public function testInsertionSort()
    {
        $this->actualData = $this->cocktailSortObject->sort($this->testData);
        $this->assertEquals($this->expectedData, $this->actualData);
    }

}
