<?php declare(strict_types = 1);


namespace Tests\Algorithms;

use PHPUnit\Framework\TestCase;
use Celyes\Algorithms\SelectionSort; 

final class SelectionSortTest extends TestCase
{
	public function testThatArrayIsSortedUsingSelectionSort()
	{
		
		$this->assertEquals(SelectionSort::produce([5,2,3,4,1]), [1,2,3,4,5]);
	}

}