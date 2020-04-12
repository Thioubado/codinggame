
<?php

$string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ?';
$l      = 4;
$h      = 5;
$let    = 'e';
$rows   = [
  0 => ' #  ##   ## ##  ### ###  ## # # ###  ## # # #   # # ###  #  ##   #  ##   ## ### # # # # # # # # # # ### ### ',
  1 => '# # # # #   # # #   #   #   # #  #    # # # #   ### # # # # # # # # # # #    #  # # # # # # # # # #   #   # ',
  2 => '### ##  #   # # ##  ##  # # ###  #    # ##  #   ### # # # # ##  # # ##   #   #  # # # # ###  #   #   #   ## ',
  3 => '# # # # #   # # #   #   # # # #  #  # # # # #   # # # # # # #    ## # #   #  #  # # # # ### # #  #  #       ',
  4 => '# # ##   ## ##  ### #    ## # # ###  #  # # ### # # # #  #  #     # # # ##   #  ###  #  # # # #  #  ###  #  ',
];

vdli($string);
$let = strtoupper($let);
for ($i = 0; $i < 5; ++$i) {
  $d = ctype_alpha($let) ? ord($let) - 65 : 26;
  vdli(substr($rows[$i], $d * $l, $l));
}
vdli(ctype_alpha($let));
vdli(ord($let));