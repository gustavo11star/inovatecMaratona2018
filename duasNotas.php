<?php

$preco = isset($argv[1]) ? (int)$argv[1]: false;
$pago = isset($argv[2]) ? (int)$argv[2]: false;

if($preco and $pago){

	$notas = [2,5,10,20,50,100];
	$troco = $pago - $preco;

	if ($troco <= 10) {
		if ((2 + 2) == $troco) {
			echo 'possivel';
		} elseif ((2+5) == $troco) {
			echo 'possivel';
		} elseif ((5 + 5) == $troco) {
			echo 'possivel';
		} else {
			echo 'impossivel';
		}		
	}

	if ($troco > 10 and $troco <= 20) {
		if ((10 + 2) == $troco) {
			echo 'possivel';
		} elseif ((10 + 5) == $troco) {
			echo 'possivel';
		} elseif ((10 + 10) == $troco) {
			echo 'possivel';
		} else {
			echo 'impossivel';
		}
	}

	if ($troco > 20 and $troco <= 50) {
		if ((20 + 2) == $troco) {
			echo 'possivel';
		} elseif ((20 + 5) == $troco) {
			echo 'possivel';
		} elseif ((20 + 10) == $troco) {
			echo 'possivel';
		} elseif ((20 + 20) == $troco) {
			echo 'possivel';
		} else {
			echo 'impossivel';
		}
	}

	if ($troco > 50 and $troco <= 100) {
		if ((50 + 2) == $troco) {
			echo 'possivel';
		} elseif ((50 + 5) == $troco) {
			echo 'possivel';
		} elseif ((50 + 10) == $troco) {
			echo 'possivel';
		} elseif ((50 + 20) == $troco) {
			echo 'possivel';
		} elseif ((50 + 50) == $troco) {
			echo 'possivel';
		} else {
			echo 'impossivel';
		}
	}

	if ($troco > 100) {
		if ((100 + 2) == $troco) {
			echo 'possivel';
		} elseif ((100 + 5) == $troco) {
			echo 'possivel';
		} elseif ((100 + 10) == $troco) {
			echo 'possivel';
		} elseif ((100 + 20) == $troco) {
			echo 'possivel';
		} elseif ((100 + 50) == $troco) {
			echo 'possivel';
		} elseif ((100 + 100) == $troco) {
			echo 'possivel';
		} else {
			echo 'impossivel';
		}
	}

}