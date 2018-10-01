<?php

$x = isset($argv[1]) ? (float)$argv[1]:false;

if ($x) {
	switch ($x) {
		case $x >= 0 and $x <= 25:
			echo 'Intervalo [0,25]';
			break;
		case $x > 25 and $x <= 50:
			echo 'Intervalo (25,50]';
			break;
		case $x > 50 and $x <= 75:
			echo 'Intervalo (50,75]';
			break;
		case $x > 75 and $x <= 100:
			echo 'Intervalo (75, 100]';
			break;
		default:
			echo 'Fora do intervalo';
			break;
	}
}