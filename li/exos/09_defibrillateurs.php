Exo 09: Défibrillateurs.<hr>
<?php
https://www.codingame.com/training/easy/defibrillators

// Reconstitution des données du test 1
$LON   = '3,879483';
$LAT   = '43,608177';
$N     = 3;
$DEFIB = [
  '0 : 1;Maison de la Prevention Sante;6 rue Maguelone 340000 Montpellier;;3,87952263361082;43,6071285339217',
  '1 : 2;Hotel de Ville;1 place Georges Freche 34267 Montpellier;;3,89652239197876;43,5987299452849',
  '2 : 3;Zoo de Lunaret;50,5 avenue Agropolis 34090 Mtp;;3,87388031141133;43,6395872778854',
];
vdli($DEFIB);
//////////////////////////////////////////////////////////////

$deg = 43.6395872778854;
// vdli($deg);
$rad = deg2rad($deg);
// vdli($rad);
// $ch = $DEFIB[0];
// echo($ch).'<br><br>';
echo '<hr>';

$re  = '/[^.]([0-9]*\,[0-9]+)\;([0-9]*\,[0-9]+)+$/m';
$str = '1;Maison de la Prevention Sante;6,8 rue Maguelone 340000 Montpellier;;3,87952263361082;43,6071285339217';

for ($i=0; $i < $N; ++$i) {
  preg_match_all($re, $DEFIB[$i], $matches, PREG_SET_ORDER, 0);
  $subject = [$matches[0][1], $matches[0][2]];
  $posdefib = preg_replace('/,/', '.', $subject);
  // vdli($matches);
  vdli($posdefib);
}
// vdli(preg_replace('/,/', '.', $subject));
// echo($ch).'<br><br>';
// vdli($out); // Coordonnées du défib
// echo ($ch).'<br><br>';

/*
Solution dans codding :

<?php


*/