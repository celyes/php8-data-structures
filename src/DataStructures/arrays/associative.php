<?php 
/**
 * associative array can have indexes that are 
 * not numerical unlike the numeric arrays 
*/
$associative_array = array(
    "name"=>"John", 
    "age"=>25, 
    "job"=>"coder"
);

foreach($associative_array as $key=>$value){

    echo "{$key} : {$value} <br>";

}