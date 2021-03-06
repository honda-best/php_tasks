<?php

	$year = readline();
	if ($year < 30000) {
	$isOne = ($year % 4 == 0 && ($year % 100 != 0 && $year % 400 == 0));
	($isOne) ? ($ans = "YES") : ($ans = "NO");
	echo $ans;
} else {
	echo 'Введите цифру менее 30000';
}
?>