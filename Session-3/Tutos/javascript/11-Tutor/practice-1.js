let mots = ["chat", "ordinateur", "table", "programmation", "js"];
let motsLongs = 0;

for (let a = 0; mots.length > a; a++)
{
	if (mots[a].length > 5)
	{
		motsLongs++;
	}
}

console.log("", motsLongs);
