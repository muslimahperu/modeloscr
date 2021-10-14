<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pagina con Template</title>
</head>
<body>

<?php

require '../vendor/autoload.php';

use \League\Plates\Engine;

$templates = new Engine('../views');

echo $templates -> render('pagina');

?>

</body>
</html>