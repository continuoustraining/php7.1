<?php
function gen_one_to_three() {
    $result = [];
    for ($i = 1; $i <= 3; $i++) {
        // Note that $i is preserved between yields.
        $result[]=$i;
    }
    return $result;
}

echo "With array:" . PHP_EOL;
foreach (gen_one_to_three() as $value) {
    echo "$value\n";
}

function gen_one_to_three_with_yield() {
    for ($i = 1; $i <= 3; $i++) {
        // Note that $i is preserved between yields.
        yield $i => 'toto';
    }
}

echo "With yield:" . PHP_EOL;
foreach (gen_one_to_three_with_yield() as $key => $value) {
    echo "$key: $value\n";
}
