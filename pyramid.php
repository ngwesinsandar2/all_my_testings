<?php
// echo "Pyramid php";

$star = "";
$star_against = "";

for ($i=0; $i < 5; $i++) { 
  $star .= "*";
  echo "$star <br />";
}

for ($i=0; $i < 5; $i++) { 
  $star_against .= "*";
  $str_pad_star = str_pad($star_against, 5, ' ', STR_PAD_LEFT);
  echo "<pre>$str_pad_star</pre>";
}