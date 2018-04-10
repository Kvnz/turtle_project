<?php
include "./classes/Voiture.php";
include "./functions/debug.php";

$voiture1 = new Voiture("jaune", "washuntai", 900, 150000
);

echo $voiture1 -> demarrer();

debug($voiture1);