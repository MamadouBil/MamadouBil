<?php

// Les Tableaux
// je peux insérer des clés dans mon tableau pour après apporter des  changement.
$tab =['nom' => 'Tine',
'prenom' => 'Djiby', 
'notes' => [18,19,17]];

// je peux à l'instant changer le nom

$tab['nom']='Kounta';

// echo $tab['prenom'] .' '. $tab['nom'] .' '. $tab['notes'][1];

// on peut avoir tableau dans tableau 

$classe=[
    ['nom' => 'Tine',
'prenom' => 'Djiby', 
'notes' => [18,19,17]],
['nom' => 'Sidibé',
'prenom' => 'Djiby', 
'notes' => [10,14,13]]
];

$nte = 14;
if ($nte>=16) {
    echo "très bien travaillé";
} 
elseif ($nte>=10) {
    echo"tu peux mieux faire : ";} 
else {
    "il faut travailler";}

// While ($nte !==20) {
//         $nte=$nte+1;

//         echo $nte;
//     }

for ($nte=$nte; $nte< 20; $nte++) {
    echo ($nte +1);
}

function multi($x,$y) {
    
    $z = $x*$y;
    return $z;
  }
  
// $r=multi(4,5);

function sum(...$ele) {
    $t=0;
    foreach ($ele as $e){
        $t +=$e;
    }
    return $t;
   
}

echo sum(3,4,5,8);


$tab=['oummy','abii','akhii'];

$n='adouwi';

if (!in_array($n,$tab)){
    echo "uuuy"; 
}

if (!isset($tab['$n'])){
    echo "hum"; 
}

 ?>

