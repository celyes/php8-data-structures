<?php declare(strict_types = 1);


namespace Tests\Algorithms;

use PHPUnit\Framework\TestCase;
use Celyes\Algorithms\QuickSort; 

final class QuickSortTest extends TestCase
{
	public function testThatArrayIsSortedUsingQuickSort()
	{

		$this->assertEquals(QuickSort::qsort([5,2,3,4,1]), [1,2,3,4,5]);
	}

}