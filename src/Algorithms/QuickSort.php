<?php

namespace Celyes\Algorithms;

final class QuickSort {

	public static function qsort($a) {
		
		if(count($a) < 2) return $a;
		$pivot = $a[0];
		$lte = [];
		$gt = [];
		foreach($a as $v) {
			if($v < $pivot) {
				$lte[] = $v;
			} elseif($v > $pivot) {
				$gt[] = $v;
			}
		}
		return array_merge(self::qsort($lte), [0 => $pivot], self::qsort($gt));
	}

}