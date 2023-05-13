<?php
require('Stack.php');
$stackSize = 5;
$stack = new Stack($stackSize);

while (true) {
    echo "Wybierz polecenie: 
        1 - push
        2 - pop
        3 - print
        0 - exit\n";

    $command = (int)fgets(STDIN);
    if ($command == 1) {
        if ($stack->isFull()) {
            echo "Stos jest pełny.\n";
        } else {
            echo "Podaj wartość dodawanego elementu:\n";
            $newElement = fgets(STDIN);
            if (is_numeric($newElement)) {
                $stack->push($newElement);
            } else {
                echo "Wpisana wartość musi być typu integer.\n";
            }
        }
    } elseif ($command == 2) {
        if ($stack->isEmpty()) {
            echo "Stos jest pusty.\n";
        } else {
            $removedElement = $stack->pop();
            echo "Usunięty element: " . $removedElement . PHP_EOL;
        }
    } elseif ($command == 3) {
        $stack->printStack();
    } elseif ($command == 0) {
        break;
    } else {
        echo "Niepoprawne polecenie.\n";
    }
}

