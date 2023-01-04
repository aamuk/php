<?php

$books = [
	[
		'name' => 'Nineteen Eighty Four',
		'author' => 'George Orwell',
		'releaseYear' => 1947,
		'purchaseURL' => 'www.1984.com',
		'image' => 'https://i0.wp.com/www.slovart.sk/buxus/images/obalky_velke/SK8392.jpg'
	],
	[
		'name' => 'Ulysees',
		'author' => 'Jim Joyce',
		'releaseYear' => 1944,
		'purchaseURL' => 'www.ulysees.com',
		'image' => 'https://images-na.ssl-images-amazon.com/images/I/41GDypN1qlL._AC_UL160_SR160,160_.jpg'
	],
	[
		'name' => 'Animal Farm',
		'author' => 'George Orwell',
		'releaseYear' => 1943,
		'purchaseURL' => 'www.animal.com',
		'image' => 'http://img.bhs4.com/29/b/29b5f015816f70da405c28cabf9d901241388341_small.jpg'
	],
	[
		'name' => 'Jude The Obscure',
		'author' => 'Thomas Hardy',
		'releaseYear' => 1833,
		'purchaseURL' => 'www.jude.com',
		'image' => 'https://s3-us-west-2.amazonaws.com/tabs.web.media/b/r/brii/brii-square-175.jpg'
	]
];


$filteredBooks = array_filter($books, function ($book) {
	return $book['releaseYear'] < 2222;
});

require "index.view.php";
