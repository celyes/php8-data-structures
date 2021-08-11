<?php declare(strict_types = 1);

namespace Tests\Algorithms;

use PHPUnit\Framework\TestCase;
use Celyes\Algorithms\BinarySearch;

final class BinarySearchTest extends TestCase
{
	public function testThatValueCanBeFound()
	{
		$this->assertEquals(BinarySearch::find([1,2,3,4,5,6], 4), 3);
		$this->assertEquals(BinarySearch::find([1,2,3,4,5,6], 2), 1);	
	}

	public function testThatValueCannotBeFound()
	{
		$this->assertEquals(BinarySearch::find([1,2,3,4,5,6], 7), -1);
		$this->assertEquals(BinarySearch::find([1,2,3,4,5,6], 18), -1);
	}
} 