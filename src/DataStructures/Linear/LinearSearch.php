<?php

namespace Celyes\DataStructures\Linear;

class LinearSearch implements LinearSearchInterface  {

	protected $array;

    public function getValue($array, $value){

    	$this->array = $array;

    	foreach($this->array as $index=>$element){

    		if($element == $value){

    			return "Found at index : " . $this->array[$index];

    		}

    	}

    	return "Not found";
    	
    }

}