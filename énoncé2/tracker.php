<?php

function CalculerImc($name,$weightKg,$heightCm){ // fonction pour calculer IMC d'un utilisateur

    $IMC = $weightKg / ($heightCm*$heightCm/10000);
    $message = "Bonjour $name , votre IMC est $IMC";
    return $message;



}

$message = CalculerImc("SARA",68,167);

echo $message;
// $name = "SARA" ;
// $weightKg = 68;
// $heightCm = 167 ;
// $heightM = $heightCm/100;
// $heightM2 = $heightM * $heightM;
// $IMC = $weightKg / $heightM2;
// echo "Bonjour $name , votre IMC est $IMC";

?>