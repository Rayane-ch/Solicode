
function compterAssetsChers(prix)
{
	let compteur = 0;
	for (let a = 0; a <= prix.length; a++)
	{
		if (prix[a] >= 50)
		{
			compteur++;
		}
	}
	return compteur;
}

let prixAssets = [15, 60, 120, 30, 85, 10];

console.log(`total is: ${compterAssetsChers(prixAssets)}`);
