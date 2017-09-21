<?php

  function microtime_float() {
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
  }

  $time_start = microtime_float();

  function binary_search($sorted_array, $number_of_interest) {
    $low = 0;
    $high = sizeof($sorted_array) - 1;
    $count = 0;

    while ($low <= $high) {
      $mid = floor(($low + $high) / 2);
      $guess = $sorted_array[$mid];
      ++$count;

      if ($guess == $number_of_interest) {
        return $count;
      } else if ($guess < $number_of_interest) {
        $low = $mid + 1;
      } else {
        $high = $mid - 1;
      }
    }
  }

  $time_end = microtime_float();
  $time = $time_end - $time_start;

  $sorted_array = [1,2,3,4,5,6,7,8,9,10];
  $number_of_interest = 5;

  echo "Binary search took ", binary_search($sorted_array, $number_of_interest), " guesses and ", $time, "(ms) to run.";
?>
