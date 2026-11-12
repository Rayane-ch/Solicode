<?php
$montant = 1200;
$taux = 0;

if ($montant < 500)
{
	$taux = 0;
}
elseif ($montant < 1000)
{
	$taux = 0.05;
}
elseif ($montant < 2000)
{
	$taux = 0.10; 
}
	else
{
	$taux = 0.15;
}

$remise = $montant * $taux;
$montant_final = $montant - $remise;

echo "Taux de remise : " . ($taux * 100) . "%<br>";
echo "Montant de la remise : " . $remise . " DH<br>";
echo "Montant final : " . $montant_final . " DH";
