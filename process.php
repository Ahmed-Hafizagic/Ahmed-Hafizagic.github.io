<?php
function unos_korisnika($datoteka, $ime, $prezime, $ocjena, $tipOcjene){
    $vrijeme=date("Y-m-d H:m:s");   	
    $red='Ime: ' . $ime . ', Prezime: ' . $prezime . ', Ocjena: '. $ocjena . ', Tip ocjene: ' . $tipOcjene . ', Vrijeme upisivanja: ' . $vrijeme . PHP_EOL;
    file_put_contents($datoteka, $red, FILE_APPEND);    
    echo"Ocjena je unesena, možete se vratiti na stranicu za unos ocjena";
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $datoteka='korisnici.txt';
    $ime=$_POST["ime"];
    $ocjena=$_POST['ocjena'];
    $prezime=$_POST['prezime'];
    $tipOcjene=$_POST['tipOcjene'];
    unos_korisnika($datoteka, $ime, $prezime, $ocjena, $tipOcjene);
}
?>