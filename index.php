//Dato un array contenente una serie di array associativi di 
utenti con nome, cognome e genere, 
per ogni utente stampare “Buongiorno Sig. Nome Cognome” o 
“Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” 
a seconda del genere

<?php

$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
  ['name' => 'Anna', 'surname' => 'Renzelo', 'gender' => 'F'],
  ['name' => 'Mario', 'surname' => 'Rossi', 'gender' => 'M'],
  ['name' => 'Stefano', 'surname' => 'Accorsi', 'gender' => 'M'],
  ['name' => 'Dave', 'surname' => 'Stewart', 'gender' => 'M'],
  ['name' => 'Jess', 'surname' => 'Johnson', 'gender' => 'F'],
  ['name' => 'Peter', 'surname' => 'Moss', 'gender' => 'M'],
  ['name' => 'Rosanna', 'surname' => 'Panna', 'gender' => 'F'],
];

foreach ($users as $user) {
    if ($user["gender"] == "M") {
        echo "Buongiorno Sig. " . $user['name'] . " " . $user['surname'] . "\n";
    } else {
        echo "Buongiorno Sig.ra " . $user['name'] . " " . $user['surname'] . "\n";
    }
}

?>