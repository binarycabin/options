<?php

namespace BinaryCabin\Tests;

use BinaryCabin\Options\BaseOption;
use PHPUnit\Framework\TestCase;

class OptionTest extends TestCase{

    public function test_it_returns_an_array_of_items(){
        $items = ExampleItemOptions::get();
        $this->assertEquals(2, count($items));
    }

    public function test_it_returns_a_blank_entry(){
        $items = ExampleItemOptions::get('---');
        $this->assertEquals(3, count($items));
    }

}

class ExampleItemOptions extends BaseOption{

    public function getArray(){
        return [
            'item-1',
            'item-2',
        ];
    }

}