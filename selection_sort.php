<?php

function find_smallest($array) {
  $smallest = $array[0];
  $smallest_index = 0;
  for ($i = 0; $i < sizeof($array); $i++) {
    if ($array[$i] < $smallest) {
      $smallest = $array[$i];
      $smallest_index = $i;
    }
  }
  return $smallest_index;
}

function selection_sort($array) {
  $new_array = [];

  #Infinite loop (work on!)
  while (sizeof($array) >= 1) {
    $smallest = find_smallest($array);
    echo $smallest;
    echo $new_array;
    echo $array;
    array_push($new_array, $array[$smallest]);
    unset($array[$smallest]);
  }

  return $new_array;
}

$array = [5, 3, 6, 2, 10];
echo selection_sort($array);
?>
