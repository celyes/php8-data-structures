<?php

namespace Celyes\Algorithms;

final class LinearSearch
{

    public static function find($array, $value)
	{
    	foreach($array as $index => $element){
    		if($element == $value){
    			return $index;
    		}
    	}
    	return -1;
    }
}
