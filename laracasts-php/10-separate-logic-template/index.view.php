<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<style>
		body {
			font-family: Poppins;
		}
	</style>
	<title></title>
</head>


<body>

	<?php

	foreach ($filteredBooks as $book) : ?>

		<h3>
			<?php echo $book['name'] . " " . $book['releaseYear']; ?>
		</h3>
		<p>
			<?php echo "By " . $book['author']; ?>
		</p>
		<img src="<?php echo $book['image'] ?>" alt="cover">

		<br><br>

	<?php endforeach; ?>

</body>

</html>