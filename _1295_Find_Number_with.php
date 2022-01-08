<?php
  /**
   * @param Integer[] $nums
   * @return Integer
   */
  function findNumbers($nums) {
    $even_number = 0;
    foreach ($nums as $num) {
        if (strlen ($num) % 2 == 0) 
            $even_number++;
    }
    return $even_number;
}
$nums = [12,345,2,6,7896];
print str_split(",",$nums);
print findNumbers($nums);
print "\n";
?>