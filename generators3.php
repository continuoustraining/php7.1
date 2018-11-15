<?php

ini_set('memory_limit', '8M');

function getLogs() {
    $logs = fopen('test.log', 'r');
    while ($line = fgets($logs, 4096)) {
        yield $line;
    }
    fclose($logs);
}

function getLogsArray() {
    return file('test.log');
}

foreach (getLogsArray() as $entry) {
    $date = new DateTime(substr($entry, 1, 10));
    echo $date->format('c') . ":" . substr($entry, 12) . PHP_EOL;
}