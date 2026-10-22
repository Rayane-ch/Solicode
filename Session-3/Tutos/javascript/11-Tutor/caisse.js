
let panier = [15, 42, 5, 89, 12, 50, 8];
let total = 0;
let test = 0;
let somme = 0;

for(let a = 0; panier.length > a; a++)
{
	total = total + panier[a];
}

console.log("Total du panier : ", total);

for(let b = 0; panier.length > b; b++)
{
	if(panier[b] > 20)
	{
		test++;
	}
}

console.log("Nombre d'articles chers : ", test);

for(let c = 0; panier.length > c; c++)
{
	if(panier[c] > 20)
	{
		somme = somme + panier[c];
	}
}

console.log("Montant des articles chers : ", somme);




