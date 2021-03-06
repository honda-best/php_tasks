<?php 

   $n = readline();

   function fib($num) {
      switch ($num) {
         case 0:
            return 0;
         case 1: 
            return 1;	
         default:
            if ($num > 1) {
               $ans = fib($num - 1) + fib($num - 2);
            }
         return $ans;
      }
   }

echo fib($n);

?>