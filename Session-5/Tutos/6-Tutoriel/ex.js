function calculerMoyenne(a, b, c) {
	let moyenne = (a + b + c) / 3;
	console.log("la moyenne est :", moyenne);
}

calculerMoyenne(50, 10, 40);

function trouverMax(x, y)
{
	if (x > y)
	{
		console.log("le max de", x, "et", y, "est :", x);
	}
	else
	{
		console.log("le max de", x, "et", y, "est :", y);
	}
}

trouverMax(543, 1950);
trouverMax(890, 349);
trouverMax(-87, 89);
