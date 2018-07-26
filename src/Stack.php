<?php
namespace crazyfactory\boilerplate;

class Stack
{
    private $maxItems = 0;
    private $items = [];
    function __construct(int $maxItems)
    {
        $this->maxItems = $maxItems;
    }
    public function add($item): void {
        if (count($this->items) > $this->maxItems) {
            throw new \Exception("Stack Overflows");
        }
        $this->items[] = $item;
    }
}
