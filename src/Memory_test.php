<?php 
    
/*  
** First : Array
** 1- Get current memory usage before creating array and appending elements to it 
** 2- Get the amount of memory used after the operation and print it s
*/
$m = memory_get_usage();
$a = [];

for($i = 0; $i < 200000; $i++){
    $a[] = $i;
}

echo (memory_get_usage() - $m)."\n";
unset($a);


/*
    Second : Doubly Linked List
    1- Get current memory usage before creating the link list  
    2- Get the amount of memory used after the operation and print it
*/
$m = memory_get_usage();
$list = new SplDoublyLinkedList();
for($i = 0; $i < 200000; $i++){
    $list->push($i);
}
echo (memory_get_usage() - $m)."\n";

?>