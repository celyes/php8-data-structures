<?php 

use Celyes\DataStructures\Linear\Stack;

$myStack = new Stack([], 10);

print_r($myStack->all());

$myStack->push("bla");
echo "<br>";
print_r($myStack->all());


$myStack->pop();
$myStack->pop();
$myStack->pop();
echo "<br>";
print_r($myStack->all());