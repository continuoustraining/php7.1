<?php

try {
    include 'test10.php';
} catch (\Throwable $e) {
    echo 'Get error: ' . get_class($e);
}