<?php

if (getenv('local')) {
  echo '032 - Dead men\'s shot.<hr>';

  // Reconstitution T //
 
}
//*** https://www.codingame.com/training/easy/dead-mens-shot
//##################################################################
// https://github.com/c57fr/codinggame
// Dév. local: http://codinggame/li

// Solution validée dans coding :
/*
3 ≤ N ≤ 10 // Corners
1 ≤ M ≤ 10 // Number of shots
-10000 < x,y < 10000
*/
else {
  fscanf(STDIN, "%d", $N);
  error_log(var_export($N, true));
  for ($i = 0; $i < $N; $i++)
  {
    fscanf(STDIN, "%d %d", $x, $y);
    error_log(var_export($x.' '.$y, true));
  }
  fscanf(STDIN, "%d", $M);
  error_log(var_export($M, true));
    for ($i = 0; $i < $M; $i++)
    {
      fscanf(STDIN, "%d %d", $x, $y);
      error_log(var_export($x.' '.$y, true));
  }
  
  echo("hit_or_miss\n");
}
