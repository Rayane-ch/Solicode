<?php

$categories = [
	'Characters',
	'Props',
	'Environment',
	'Vehicles',
	'Weapons',
	'Architecture'
];

$models = [
	[
		'id' => 1,
		'title' => 'Low-poly Sword',
		'owner' => 'Amine',
		'polygons' => 3200,
		'format' => 'FBX',
		'price' => 0,
		'category' => 'Weapons',
		'icon' => '🗡️',
		'color' => 'blue'
	],
	[
		'id' => 2,
		'title' => 'Stylized Oak Tree',
		'owner' => 'Sara',
		'polygons' => 8900,
		'format' => 'BLEND',
		'price' => 9,
		'category' => 'Environment',
		'icon' => '🌳',
		'color' => 'green'
	],
	[
		'id' => 3,
		'title' => 'Medieval House',
		'owner' => 'Youssef',
		'polygons' => 24500,
		'format' => 'FBX',
		'price' => 19,
		'category' => 'Architecture',
		'icon' => '🏠',
		'color' => 'orange'
	],
	[
		'id' => 4,
		'title' => 'Robot Character',
		'owner' => 'Lina',
		'polygons' => 15200,
		'format' => 'BLEND',
		'price' => 29,
		'category' => 'Characters',
		'icon' => '🤖',
		'color' => 'purple'
	],
	[
		'id' => 5,
		'title' => 'Sport Car',
		'owner' => 'Omar',
		'polygons' => 32000,
		'format' => 'OBJ',
		'price' => 35,
		'category' => 'Vehicles',
		'icon' => '🚗',
		'color' => 'red'
	],
	[
		'id' => 6,
		'title' => 'Sci-fi Crate',
		'owner' => 'Hiba',
		'polygons' => 1850,
		'format' => 'OBJ',
		'price' => 4,
		'category' => 'Props',
		'icon' => '📦',
		'color' => 'teal'
	],
	[
		'id' => 7,
		'title' => 'Tactical Assault Rifle',
		'owner' => 'Rayane',
		'polygons' => 14600,
		'format' => 'FBX',
		'price' => 15,
		'category' => 'Weapons',
		'icon' => '🔫',
		'color' => 'blue'
	],
	[
		'id' => 8,
		'title' => 'Desert Rock Pack',
		'owner' => 'Karim',
		'polygons' => 6400,
		'format' => 'BLEND',
		'price' => 0,
		'category' => 'Environment',
		'icon' => '🪨',
		'color' => 'green'
	],
	[
		'id' => 9,
		'title' => 'Delivery Drone',
		'owner' => 'Salma',
		'polygons' => 11200,
		'format' => 'FBX',
		'price' => 12,
		'category' => 'Vehicles',
		'icon' => '🚁',
		'color' => 'orange'
	],
	[
		'id' => 10,
		'title' => 'Cyber Samurai Helmet',
		'owner' => 'Mehdi',
		'polygons' => 19800,
		'format' => 'OBJ',
		'price' => 22,
		'category' => 'Characters',
		'icon' => '🪖',
		'color' => 'purple'
	]
];

$totalModels = count($models);
$freemodels = 0;

foreach ($models as $model)
{
	if ($model['price'] === 0)
	{
		$freemodels++;
	}
}

require ('index-template.php');
