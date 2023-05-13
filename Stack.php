<?php

class Stack
{
    private int $stackSize;
    private array $stack;
    private int $topIndex;

    public function __construct(int $stackSize)
    {
        $this->stackSize = $stackSize;
        $this->stack = array();
        $this->topIndex = -1;
    }

    /**
     * @desc Check if stack is empty
     *
     * @return bool true if stack is empty
     */
    public function isEmpty(): bool
    {
        return ($this->topIndex == -1);
    }

    /**
     * @desc Check if stack is full
     *
     * @return bool true if stack is full
     */
    public function isFull(): bool
    {
        return ($this->topIndex == $this->stackSize - 1);
    }

    /**
     * @desc Get size of the stack
     *
     * @return int size of the stack
     */
    private function getSize(): int
    {
        return ($this->topIndex + 1);
    }

    /**
     * @desc Remove element from the top of the stack
     *
     * @return int Value of removed element
     */
    public function pop(): int
    {
        $topElement = $this->stack[$this->topIndex];
        $this->topIndex--;
        return $topElement;
    }

    /**
     * @desc Add new element to the stack
     *
     * @param int $newElement value of a new element
     */
    public function push(int $newElement): void
    {
        if (!$this->isFull()) {
            $this->topIndex++;
            $this->stack[$this->topIndex] = $newElement;
        }
    }

    /**
     * @desc Print out all elements of the stack
     */
    public function printStack(): void
    {
        if ($this->isEmpty()) {
            echo "Stos jest pusty.\n";
        } else {
            echo "Stos (" . $this->getSize() . "-elementów): ";
            for ($i = 0; $i <= $this->topIndex; $i++) {
                echo $this->stack[$i] . " ";
            }
            echo PHP_EOL;
        }
    }
}
