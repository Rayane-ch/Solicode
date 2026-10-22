
let nombres = [4, 7, 2, 9, 5, 8];
let sommePairs = 0;

for (let b = 0; nombres.length > b; b++)
{
	if(nombres[b] % 2 === 0)
	{
		sommePairs = sommePairs + nombres[b];
	}
}

console.log("", sommePairs);
