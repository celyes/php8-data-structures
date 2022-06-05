<?php

namespace Celyes\DataStructures;
final class Queue
{
    protected $pool = [];

    /**
     * enqueue - Adds an element to the queue
     * @param mixed $element - The element to be added to the queue
     */
    public function enqueue($element)
    {
        $this->pool[] = $element;
    }

    /**
     * dequeue - shifts an element from the queue
     * @return mixed - the shifted element
     */
    public function dequeue()
    {
        return array_shift($this->pool);
    }

    /**
     * count - gets the count of element in the queue
     * @return int - the count of how many elements are in the queue
     */
    public function count()
    {
        return count($this->pool);
    }
} 