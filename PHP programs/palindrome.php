<?php
$num = 12321; // replace with the number you want to check
$temp = $num;
$reverse_num = 0;

while ($temp > 0) {
  $remainder = $temp % 10;
  $reverse_num = ($reverse_num * 10) + $remainder;
  $temp = (int)($temp / 10);
}

if ($num == $reverse_num) {
  echo $num." is a palindrome number";
} else {
  echo $num." is not a palindrome number";
}
?>
