<?php

class toto {

	public function __toString() : string {
		return 2;
	}

}

$test = new toto();

echo $test;
