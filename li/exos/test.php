<?php

$A1 = 7;
$N  = 11;

function ve6($An = 7, $N = 11) // Tableau [N, index] avec yield
{
  // $m_ini = memory_get_usage();
  foreach (range(1, $N - 1) as $ii) {
    [$last[$An], $An] = [$ii, isset($last[$An]) ?
      $ii - $last[$An] :
      0];
  }
  echo $An;
    // $m_fin = memory_get_usage();
    // $a[]   = mf($m_fin - $m_ini
  return [$An];
}
$ve = ve6($A1, $N);
echo '<hr>Der: '.end($ve);

/*
fscanf(STDIN, "%d", $An);
fscanf(STDIN, "%d", $N);
foreach (range(1,$N-1) as $ii) [ $last[$An], $An ] = [ $ii, isset($last[$An]) ? $ii - $last[$An] : 0 ];
echo $An;
*/
