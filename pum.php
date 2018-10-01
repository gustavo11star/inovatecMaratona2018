<?php

$nLinhas = isset($argv[1]) ? (int)$argv[1]:false;

if ($nLinhas) {
	for ($i = 1; $i <= $nLinhas; $i++) {
		if ($i == 1) {
			$x = 1;
			$y = 3; 
		} else {
			$x = $y + 2;
			$y = ($y + 1) + 3;
		}
		$aux = 1;
		for ($j = $x; $j <= $y ; $j++) {
			if ($aux < 3) {
				echo $j.' ';
				$aux ++;
			} else {
				echo $j." PUM";
				echo "\n";
			}
		}
	}
}