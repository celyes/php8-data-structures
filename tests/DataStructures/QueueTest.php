<?php declare(strict_types = 1);

namespace Tests\Algorithms;

use PHPUnit\Framework\TestCase;
use Celyes\DataStructures\Queue;

final class QueueTest extends TestCase
{
    protected $queue;
    public function setup(): void
    {
        $this->queue = new Queue();
    }

    /**
     * @test
     */
    public function isEnqueueWorking()
    {
        $this->queue->enqueue(1);
        $this->queue->enqueue(2);
        $this->assertEquals(2, $this->queue->count());
    }

    /**
     * @test
     */
    public function isDequeueWorking()
    {
        $this->queue->enqueue(1);
        $this->queue->enqueue(2);
        $this->queue->enqueue(3);
        $this->queue->dequeue(2); // we've [1, 3] left
        $this->assertEquals(2, $this->queue->count());
    }
}