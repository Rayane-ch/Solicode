
function calcule(a, b)
{
	return a * b;
}

function grand(surface)
{
	return surface >= 100;
}

let surfacePiece = calcule(12, 10);
let largeRoom = grand(surfacePiece);

console.log(`Surface calculée : ${surfacePiece} m2`);
console.log(`Grande pièce : ${largeRoom}`);
