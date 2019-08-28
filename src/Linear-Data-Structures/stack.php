<?php 
namespace Celyes\DataStructures\Linear;

require __DIR__.'\..\..\vendor\autoload.php';

class Stack implements StackInterface{
    protected $stack;
    protected $limit;

    public function __construct(array $initiate = array(), int $limit = 10){
        $this->stack = $initiate;
        $this->limit = $limit;
    }
   
    public function push($item){
        
        if(count($this->stack) < $this->limit){
            array_unshift($this->stack , $item);
        }else{
            throw new RunTimeException("Stack is full!");
        }
    }
    public function pop(){
        if($this->isEmpty()){
            throw new RunTimeException("Stack is empty!");
        }else{
            return array_shift($this->stack);
        }
    }
    public function top(){
        return $this->stack[0];
    }
    public function all(){
        return $this->stack;
    }
    public function isEmpty(){
        return empty($this->stack);
    }
}