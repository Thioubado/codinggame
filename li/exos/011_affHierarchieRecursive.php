<!-- Affichage hiérarchie simple -->
<?php

$rens = function ($u) {
  // vdli($u);
  return
  '<td style="padding-right: 10px;">'.
  (($u[6]) ? str_repeat('&nbsp;', ($u[7] * 6)).' └─ ' : str_repeat('&nbsp;', 7)).
  $u[6].' <strong>'.$u[0].'</strong><td>'.$u[8].'</td> <td style="padding-left: 10px; padding-right: 10px;">'.$u[2].' </td><td style="padding-left: 10px; padding-right: 10px;"> P '.$u[7].'</td>';
};

echo '<table border=0><tr>';

$idps = array_column($ms, 8);

function filleuls($id, $idps, $lignee)
{
  $enfants = array_keys($idps, $id, true); // get enfants de id
  foreach ($enfants as $k => $enfant) {
    $lignee[] = $enfant;
    $lignee   = filleuls($enfant, $idps, $lignee);
  }

  return $lignee;
}

$lignee = filleuls(0, $idps, []);

//   $groupe[] = $filleuls[$enfant];
// vdli($enfants);
// $enfants = array_keys($idps, 1, true); // get enfants de id 0
// foreach ($enfants as $k => $enfant) {
//   $groupe[] = $ms[$enfant][0];
// }

array_unshift($lignee, 0);
// vdli($lignee);



 foreach ($lignee as $k=>$kid) {
    echo '<tr><td>'.$k.'</td>'.$rens($ms[$kid]).'</tr>';
//    echo $ms[$kid][0].'<br>';
 }

// $enfants = array_keys($idps, 3, true); // get enfants de id 0
// vdli($enfants);

// }
echo '</table>';

// ALT + 192 & ALT + 196