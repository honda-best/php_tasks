<?php 
	$n = readline();
   $log = log($n,2); // находим логарифм
   $ch = $log - floor($log); // извлекаем дробную часть из логарифма
      if ($ch == 0){ // если она равна нулю...
	   echo "YES";
      } else {
         echo "NO";
      }
?>