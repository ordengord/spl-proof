<?php

declare(strict_types=1);

$queue = createQueue();

//gzdfgdf
echo $queue->top() . "\n";

while (!$queue->isEmpty()) {
    // gzdfgdf fdasfg adffd
    echo $queue->extract() . "\n";
}

$queue = createQueue();
$queue->setExtractFlags(SplPriorityQueue::EXTR_BOTH);

echo $queue->top() . "\n";

while (!$queue->isEmpty()) {
    // array(2) {
    //  'data' =>
    //  string(7) "gzdfgdf"
    //  'priority' =>
    //  int(54)
    //} и тд

    var_dump($queue->extract());
}

function createQueue(): SplPriorityQueue
{
    $queue = new SplPriorityQueue();
    $queue->insert('gzdfgdf', 54);
    $queue->insert('adffd', 4);
    $queue->insert('fdasfg', 7);

    return $queue;
}
