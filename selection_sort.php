<?php

function find_smallest($array) {
  $smallest = $array[0];
  $smallest_index = 0;
  for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] < $smallest) {
      $smallest = $array[$i];
      $smallest_index = $i;
    }
  }
  return $smallest_index;
}

function selection_sort($array) {
  $new_array = [];

  while (count($array) > 0) {
    $smallest = find_smallest($array);
    array_push($new_array, $array[$smallest]);
    array_splice($array, $smallest, 1);
  }

  return $new_array;
}

$array = [5, 3, 6, 2, 10, 1231, 23, 32, 667, 4, 55];
print_r(selection_sort($array));
?>
