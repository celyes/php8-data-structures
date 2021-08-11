<?php

namespace Celyes\DataStructures\Linear;

interface StackInterface  {

    public function __construct(array $initiate, int $limit);
    public function push($item);
    public function pop();
    public function top();
    public function all();
    public function isEmpty(); 

}