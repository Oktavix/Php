<?php
  $test_array = array(
    0 => 'example1',
    1 => 'Example11',
    2 => 'example10',
    3 => 'Example6',
    4 => 'example4',
    5 => 'EXAMPLE40',
    6 => 'example10'
  );

  asort($test_array, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);

  echo "<pre>";
  print_r($test_array);
  echo "</pre>";
?>
