<?php

use crazyfactory\boilerplate\Stack;

class StackTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $this->assertTrue(class_exists(Stack::class));
    }

    public function testCanAdd()
    {
        $stack = new Stack(2);
        $stack->add(3);
        $stack->add(3);
    }

    /**
     * @expectedExceptionMessage Stack Overflows
     */
    public function testIfWePushMoreThanMaxItThrowsError() {
        $stack = new Stack(2);
        $stack->add(2);
        $stack->add(3);
        $stack->add(4);
    }
}
