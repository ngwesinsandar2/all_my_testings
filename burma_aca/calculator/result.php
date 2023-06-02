<?php
$first_num = (int)$_POST['first_number'];
$second_num = (int)$_POST['second_number'];
$what_to_do = $_POST['what_to_do'];

if ($what_to_do == 1) {
  echo "<h1>" . $first_num + $second_num . "</h1>";
} else if ($what_to_do == 2) {
  echo "<h1>" . $first_num - $second_num . "</h1>";
} else if ($what_to_do == 3) {
  echo "<h1>" . $first_num * $second_num . "</h1>";
} else if ($what_to_do == 4) {
  echo "<h1>" . $first_num / $second_num . "</h1>";
} else {
  echo "Invalid operation";
};
