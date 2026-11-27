
function calculerRevenuTotal(ventes)
{
	let total = 0;
	for (let i = 0; i < ventes.length; i++)
	{
		total += ventes[i];
	}
	return total / ventes.length;
}

let groupeA = [12, 14, 16];
let groupeB = [10, 18, 11, 13];

console.log (`Total 1 is : ${calculerRevenuTotal(groupeA)}`);
console.log(`Total 2 is : ${calculerRevenuTotal(groupeB)}`);
