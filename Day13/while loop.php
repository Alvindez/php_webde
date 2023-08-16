<?php
 function calculateSumFromUserInput() {
     $numbers=array();
     $count=readline("Enter number of values:");
     for ($i=0;$i<$count;$i++){
         $value= readline("Enter value".($i+1).":");
         $numbers[]=(int) $value;
     }
     $sum= array_sum($numbers);
     echo "Sum of the entered values :" .$sum;
}
calculateSumFromUserInput();
?>