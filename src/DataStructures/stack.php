<?php 
namespace Celyes\DataStructures;

require __DIR__.'\..\..\vendor\autoload.php';

final class Stack
{
    protected $stack;
    protected $limit;

    /**
     * __construct: sets some initial variables
     *
     * @param  mixed $initiate sets the property stack to a given array.
     * @param  mixed $limit sets the maximum length of the stack..
     *
     * @return void
     */
    public function __construct($initiate, $limit = 10)
    {
        if(empty($initiate)){
            $initiate = [];
        }
        $this->stack = array_reverse($initiate);
        $this->limit = $limit;
    }
   
    /**
     * push : adds a new item to the end of the stack
     *
     * @param  mixed $item
     *
     * @return void 
     */
    public function push($item)
    
    {
        
        if(count($this->stack) < $this->limit){
            array_unshift($this->stack , $item);
        }else{
            throw new RunTimeException("Stack is full!");
        }
    }

    
    /**
     * pop : removes the last item of the stack
     *
     * @return mixed 
     */
    public function pop()
    {
        if($this->isEmpty()){
            throw new \RunTimeException("Stack is empty!");
        }else{
            return array_shift($this->stack);
        }
    }
    

    /**
     * top : returns the content of the last element added to the stack
     *
     * @return mixed
     */

    public function top()
    {
        return $this->stack[0];
    }


    /**
     * all : returns all the items in the stack as an array
     *
     * @return array
     */

    public function all()
    {
        return $this->stack;
    }

    
    /**
     * isEmpty : checks if the stack is empty.
     *
     * @return boolean
     */
    public function isEmpty()
    {
        return empty($this->stack);
    }
}