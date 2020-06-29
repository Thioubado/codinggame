<?php

if (getenv('local')) {
  echo '028 - Expressions parenthésées.<hr>';

  // Reconstitution T1
  $ch = '{([]){}()}';
  // $ch = '{()';
  // Reconstitution T2
  // $ch = '{([{S}]]6K[()]}';

  // Reconstitution T3

  $pairs = ['(' => ')', '[' => ']', '{' => '}'];
  vdli($pairs);
  $ders = [];
  $res  = 'true';
  for ($l = strlen($ch),$i = -1; $res && ++$i < $l;) {
    echo $i.' - '.implode(' ', $ders).'<br>';
    if (array_key_exists($ch[$i], $pairs)) {
      $ders[] = $pairs[$ch[$i]];
    }
    if (in_array($ch[$i], $pairs, true) && $ch[$i] === end($ders)) {
      array_pop($ders);
    }
  }
  if ($ders) {
    $res = 'false';
  }

  echo $res."\n";
}
// https://www.codingame.com/ide/puzzle/brackets-extreme-edition
//##################################################################
// https://github.com/c57fr/codinggame

// Solution validée dans codding :
else {
  fscanf(STDIN, '%s', $ch);
  error_log(var_export($ch, true));

  $pairs = ['(' => ')', '[' => ']', '{' => '}'];
  $ders  = [];
  $res   = 'true';
  for ($l = strlen($ch),$i = -1; $res && ++$i < $l;) {
    if (array_key_exists($ch[$i], $pairs)) {
      $ders[] = $pairs[$ch[$i]];
    }
    if (in_array($ch[$i], $pairs, true) && $ch[$i] === end($ders)) {
      array_pop($ders);
    }
  }
  if (!empty($ders)) {
    $res = 'false';
  }
  echo $res."\n";
}
