<?php

// а для SplHeap - это наследование и нужно описать метод compare
$heap = new SplMinHeap();

$heap->insert(4);
$heap->insert(2);
$heap->insert(8);
$heap->insert(5);
$heap->insert(1);

foreach ($heap as $item) {
    // 1 2 4 5 8
    echo $item . "\n";
}


