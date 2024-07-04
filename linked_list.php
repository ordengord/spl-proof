<?php

declare(strict_types=1);

// new SplStack - тоже самое
$linkedList = new SplDoublyLinkedList();
echo $linkedList->isEmpty();

$linkedList->push(1);
$linkedList->push(2);
$linkedList->pop();
$linkedList->add(0, 3);

// 3, 1
var_dump(iterator_to_array($linkedList));

$queue = new SplQueue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->dequeue();
$queue->enqueue(5);

//2, 3, 4, 5
var_dump(iterator_to_array($queue));

