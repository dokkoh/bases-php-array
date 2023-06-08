<!-- ARRAYS -->

<?php

// tableau basique

$notes = [10, 20, 10, 9, 'eleve'];
echo $notes[1];

// tableau imbrique

$eleve = ['John', 'Doe', [10, 20, 30]];
echo $eleve[2][0];

?>

<?php

$eleve1 = [
  'nom' => 'Doe',
  'prenom' => 'John',
  'notes' => [10, 20, 15]
];

// modif d elements

$eleve1['prenom'] = 'Jean';
$eleve1['notes'][1]=16;
$eleve1['notes'][]=6;// ajout d un nouvel element

echo $eleve1['prenom'] . ' ' . $eleve1['nom'];
print_r($eleve1['notes']);

// ajoute un nouvel element. Attention ajout se fait a l index 0 !
// $eleve1[] = 'CM2-A';
// print_r($eleve1);

?>

<?php

$classe = [
  [
    'nom' => 'Doe',
    'prenom' => 'Jean',
    'notes' => [13, 14, 15]
  ],
  [
    'nom' => 'Doe',
    'prenom' => 'Pierre',
    'notes' => [18, 10, 13]
  ],
];

echo $classe[1]['notes'][1];

?>