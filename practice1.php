<?php
$text = '';
for ($i = 1; $i <= 100; $i++) {
  if ($i % 15 === 0) {
    $text =  "FizzBuzz";
  } elseif ($i % 3 === 0) {
    $text = 'Fizz';
  } elseif ($i % 5 === 0) {
    $text = 'Buzz';
  } else {
    $text = $i;
  }
  echo $text . PHP_EOL;
}
