<?php 
   
	$a = readline();
   $n = readline();

	function power($a, $n) {
      $sum = 1;
    for ($i = 0; $i < $n; $i++)
        $sum *= $a;
    return $sum;
   }
   echo $sum;
?>