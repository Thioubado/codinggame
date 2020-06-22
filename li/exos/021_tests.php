<?php

$A1 = 7;
$N  = 1e5;

echo nf($N).'<hr>';

// 2do dico des indexes - 1 boucle + ternaire
function ve7($An = 7, $N = 11) // range
{
  $deb   = microtime(true);
  $m_ini = memory_get_usage();
  foreach (range(1, $N - 1) as $ii) {
    list($last[$An], $An) = [$ii, isset($last[$An]) ?
      $ii - $last[$An] :
      0, ];
  }
  // echo $An.'<br>';
  $m_fin = memory_get_usage();
  $chg   = mf($m_fin - $m_ini);

  return [$An, $chg, chrono($deb, 1)];
}

function ve77($A1 = 7, $N = 11) // Vars Dyn.
{
  $deb   = microtime(true);
  $m_ini = memory_get_usage();
  $n     = $i     = $A1;

  while (--$N) {
    $v = $n;
    // echo $v.' ';
    $n    = isset(${$n}) ? $i - ${$n} : 0;
    ${$v} = $i++;
  }
  $a      = [$n];
  $m_fin1 = memory_get_usage();
  $a[]    = mf($m_fin1 - $m_ini);
  $a[]    = chrono($deb, 1);

  return $a;
}

function ve777($An = 7, $N = 11) // for i
{
  $deb   = microtime(true);
  $m_ini = memory_get_usage();
  // foreach (range(1, $N - 1) as $ii) {
  for ($ii = 1; $ii < $N - 1; ++$ii) {
    $n = [$ii, isset($last[$An]) ?
      $ii - $last[$An] :
      0, ];
  }
  list($last[$An], $An) = $n;
  // echo $An.'<br>';
  $m_fin = memory_get_usage();
  $chg   = mf($m_fin - $m_ini);

  return [$An, $chg, chrono($deb, 1)];
}

// 2do recherche des limites de vars dyn et scal
// $ve['7 - 1 boucle Range'] = ve7($A1, $N);
// $ve['77 - Vars dyn.']     = ve77($A1, $N);
$ve['777 - vars scal']    = ve777($A1, $N);
vdli($ve);

// echo '<hr>Der: '.end($ve);

/*
fscanf(STDIN, "%d", $An);
fscanf(STDIN, "%d", $N);
foreach (range(1,$N-1) as $ii) [ $last[$An], $An ] = [ $ii, isset($last[$An]) ? $ii - $last[$An] : 0 ];
echo $An;
*/
