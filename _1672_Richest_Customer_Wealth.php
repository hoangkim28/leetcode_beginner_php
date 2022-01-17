<?php

/**
 * @param Integer[][] $accounts
 * @return Integer
 */
function maximumWealth($accounts)
{
  $max_wealth = 0;
  foreach ($accounts as $account) {
    // https://www.w3schools.com/php/func_array_sum.asp
    $customer_wealth = array_sum($account);
    if ($customer_wealth > $max_wealth) {
      $max_wealth = $customer_wealth;
    }
  }
  return $max_wealth;
}

//----------------------------------------------------------------
$accounts = [[1, 5], [7, 3], [3, 5]];
echo maximumWealth($accounts);
