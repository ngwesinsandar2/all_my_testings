<?php
function printNumbers(int $total){
  for ($i=1; $i <= $total; $i++) { 
    if ($i % 3 == 0 and $i % 5 == 0) {
      echo "<h2>FizzBuzz</h2>";
    } else if ($i % 3 == 0) {
      echo "<h2>Fizz</h2>";
    } else if ($i % 5 == 0) {
      echo "<h2>Buzz</h2>";
    } else {
      echo "<h2>$i</h2>";
    };
  }
}
printNumbers(100);