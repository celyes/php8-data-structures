<?php

namespace Celyes\Algorithms;

final class SelectionSort
{
	public static function produce(array $data): array
	{
		$count = count($data);
		for($i = 0; $i < $count - 1; $i++) {
			$min = $i;
			for($j = $i + 1; $j < $count; $j++) {
				if($data[$j] < $data[$min]) {
					$min = $j;
				}
			}

			// swap values
			$temp = $data[$min];
			$data[$min] = $data[$i];
			$data[$i] = $temp;
		}
		return $data;
	}
}