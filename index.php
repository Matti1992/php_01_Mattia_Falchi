<?php
// ESERCIZI PHP 1 
// - Installare PHP
// -Rivedere la lezione
// -Fare il recap
// -Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array


// -Pushate su Github chiamando la repository php_01_nome_cognome e inviate il link sul canale presente su discord

$numbers =[74, 10, 1000, 55, 45];
$somma=0;
$pari=0;

for ($i=0; $i <count($numbers) ; $i++) { 
    if ($numbers[$i]%2==0) {
        $somma+=$numbers[$i];
        $pari++;
    }
}    
$media=$somma/$pari;
// echo($media);       
    
// -Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
// $users = [
//   ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
// ];
$users = [
      ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
      ['name' => 'Danele', 'surname' => 'Concas', 'gender' => 'M'],
      ['name' => 'Marco', 'surname' => 'Sotera', 'gender' => 'M'],
      ['name' => 'Mattia', 'surname' => 'Falchi', 'gender' => 'M'],
      ['name' => 'Sara', 'surname' => 'Orciuoli', 'gender' => 'F'],
      ];
      foreach($users as $user){
        if ($user["gender"]== "M") {
            echo("\n buongiorno signore ". $user["name"]);
        }else if ($user["gender"]== "F") {
            echo("\n buongiorno signora \n " . $user["name"]);
        }
      };

    // -Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY66".



    for ($i=0; $i <= 100; $i++){ 
        if ($i%15==0 ) {

            echo("HACKADEMY66 \n");
        }else if ($i%5==0) {
            echo("JAVASCRIPT \n");
        }else if ($i%3==0){
            echo("php \n");
        }else {
            echo("$i \n");
        }
        
        
        
    }
    
