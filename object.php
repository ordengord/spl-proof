<?php

declare(strict_types=1);

// тут взял у чатгпт тк лень
// суть понятна - объекты в ключах
// attach/detach
// на php.net описано имплементация  обзервера через эту штуку - однажды заюзаю
$obj1 = new stdClass();
$obj1->name = "Object 1";

$obj2 = new stdClass();
$obj2->name = "Object 2";

$storage = new SplObjectStorage();

$storage->attach($obj1, "1");
$storage->attach($obj2, "1");

if ($storage->contains($obj1)) {
    echo $obj1->name . " is in the storage with data: " . $storage[$obj1] . "\n";
}

$storage[$obj1] = "Updated Data for Object 1";
echo "Updated data for " . $obj1->name . ": " . $storage[$obj1] . "\n";

$storage->detach($obj1);
if (!$storage->contains($obj1)) {
    echo $obj1->name . " has been removed from the storage.\n";
}

// Получаем количество объектов в хранилище
echo "Number of objects in storage: " . count($storage) . "\n";


