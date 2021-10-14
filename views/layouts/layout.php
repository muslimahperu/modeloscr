<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<header>
		
	</header>

		<main>
		Esta es mi cabecera
		<hr>
		</main>

		<?= $this->section('content') ?>

		<footer>
			<hr>
			Este es mi pie de pagina
		<?= $this->section('footerLinks') ?>
		</footer>
</body>
</html>