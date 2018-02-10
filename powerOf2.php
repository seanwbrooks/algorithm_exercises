<?php
$start_time = microtime(TRUE);

session_start();

function powersOf2($n) {
  if($n < 1) {
    return 0;
  } else if ($n == 1) {
    echo 1 . " ";
    return 1;
  } else {
    $prev = powersOf2($n / 2);
    $cur = $prev * 2;
    echo $cur . " ";
    return $cur;
  }
}

$end_time = microtime(TRUE);

echo powersOf2(50) . " ";
echo $end_time - $start_time;

?>
