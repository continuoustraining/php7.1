<?php

// A. 10
// B. 20
// C. 14

$arr = [1,2,3,4];

foreach($arr as &$val) {
	$val = $val * 2;
}

foreach($arr as $key => $val) {
	print_r(array_sum($arr));
	exit;
}
