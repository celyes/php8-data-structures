<?php 
// Multi dimensional arrays can hold arrays inside it as values
$multi_dimensional_array = array(
    "david"=> [
        "physics"=>34,
        "math"=>36,
        "chemistry"=>30
    ],
    "brian"=> [
        "physics"=>25,
        "math"=>36,
        "chemistry"=>41
    ],
    "john"=> [
        "physics"=>28,
        "math"=>27,
        "chemistry"=>33
    ],
);
foreach($multi_dimensional_array as $key=>$value){
    echo "<hr>$key took : ";
    foreach($value as $module=>$mark){
        echo "<br> {$mark} in {$module}";
    }
}