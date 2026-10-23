let ventes = [110, 75, 150, 180, 90, 130, 100, 160];

let caTOTAL = 0;
let maxVente = ventes[0];
let miniVente = ventes[0];
let nbExceptionnelles = 0;
let caExceptionnelles = 0;

for (let a = 0; ventes.length > a; a++)
{
	let vente = ventes[a];

	caTOTAL = caTOTAL + vente;

	if(vente > maxVente)
	{
		maxVente = vente;
	}

	if(vente < miniVente)
	{
		miniVente = vente;
	}

	if(vente >= 130)
	{
		nbExceptionnelles++;
		caExceptionnelles = caExceptionnelles + vente;
	}
}

console.log("Nombre total de ventes : ", ventes.length);
console.log("Chiffre d'affaires total : ", caTOTAL);
console.log("Vente la plus élevée (Max) : ", maxVente);
console.log("Vente la plus faible (Min) : ", miniVente);
console.log("Nombre de ventes exceptionnelles : ", nbExceptionnelles);
console.log("CA des ventes exceptionnelles : ", caExceptionnelles);


