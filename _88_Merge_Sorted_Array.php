<?php
/**
* @param Integer[] $nums1
* @param Integer $m
* @param Integer[] $nums2
* @param Integer $n
* @return NULL
*/
function merge(&$nums1, $m, $nums2, $n) {
  // https://www.w3schools.com/php/func_array_splice.asp
  array_splice($nums1, $m, $n, $nums2);
  sort($nums1);
  // return $nums1;
}

// ----------------------------------------------------------------

$nums1 = [1,2,3,6,12,0,0,0];
$m = 5;
$nums2 = [2,5,6];
$n = 3;
print_r(merge($nums1, $m, $nums2, $n));

?>