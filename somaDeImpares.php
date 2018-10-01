<?php

$a = isset($argv[1]) ? (int)$argv[1]:false;
$b = isset($argv[2]) ? (int)$argv[2]:false;

if ($a and $b) {
	$aux = 0;
	if ($a > $b){
		for ($i = $b+1; $i < $a; $i++){
			if ($i % 2 != 0) {
				$aux += $i;
			} 
		}
	} else {
		for ($i = $a+1; $i < $b; $i++){
			if ($i % 2 != 0) {
				$aux += $i;
			}
		}
	}
	echo $aux;
}