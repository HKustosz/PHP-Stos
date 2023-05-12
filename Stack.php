<?php
class Stack
{
    private int $stackSize;
    private array $stack;
    private int $topIndex;

    function __construct(int $stackSize)
    {
        $this->stackSize = $stackSize;
        $this->stack = array();
        $this->topIndex = -1;
    }

    // return true if stack is empty
    function isEmpty(): bool
    {
        return($this->topIndex == -1);
    }

    // return true is stack is full
    function isFull(): bool
    {
        return($this->topIndex == $this->stackSize - 1);
    }

    // return amount of elements in a stack
    function getSize(): int
    {
        return($this->topIndex + 1);
    }

    // remove element from top of the stack
    function pop(): int
    {
        $topElement = $this->stack[$this->topIndex];
        $this->topIndex--;
        return $topElement;
    }

    // add element to the stack
    function push(int $newElement): void
    {
        if(!$this->isFull())
        {
            $this->topIndex++;
            $this->stack[$this->topIndex] = $newElement;
        }
    }

    // print the stack
    function printStack(): void
    {
        if($this->isEmpty())
        {
            echo "Stos jest pusty.\n";
        }
        else
        {
            echo "Stos (".$this->getSize()."-elementów): ";
            for($i = 0; $i <= $this->topIndex; $i++)
            {
                echo $this->stack[$i]." ";
            }
            echo "\n";
        }
    }
}
