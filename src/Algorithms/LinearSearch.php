<?php 

namespace Celyes\Algorithms;


/**
 * Linear Search 
 * Time complexity: O(n)
 * */

final class LinearSearch
{

	public static function find(array $items, string|int $needle): int
	{
		foreach($items as $index => $value) {
			if($value === $needle) {
				return $index;
			}
		}
		return -1;
	}

}