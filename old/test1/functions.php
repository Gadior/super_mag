<?php 

function quadratic($a,$b,$c){

	$d = ($b * $b) - (4 * $a * $c);

	if ($d < 0){

		return false;
	} elseif ($d == 0 ) {
		$x = - $d / (2 * $a);
		return $x;
	}elseif ($d>0) {
		$x1 = (-$b - sqrt($d)) / (2 * $a);
		$x2 = (-$b + sqrt($d)) / (2 * $a);

		return array ('x1' => $x1, 'x2' => $x2);
	}
}
?>