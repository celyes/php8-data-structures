<?php 

namespace Celyes\Algorithms;

final class BinarySearch
{

	public static function find(array $items, string|int $needle): int
	{
		$low = 0;
		$high = count($items) - 1;
		while($low <= $high) {
			$mid = $low + $high;
			$guess = $items[$mid];
			if($needle === $guess) {
				return $mid;
			} elseif ($needle > $guess) {
				$low = $mid + 1;
			} elseif($needle < $guess) {
				$high = $mid - 1;
			} 
		}
		return -1;
	}

}