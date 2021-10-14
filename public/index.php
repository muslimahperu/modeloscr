
<?php

	require '../vendor/autoload.php';

	$router = new AltoRouter();

    $router->map( 'GET', '/', 'FrontController#home', 'home' );
    $router->map( 'GET', '/otra/carpeta', 'FrontController#otraCarpeta' );
    $router->map( 'GET', '/producto/[i:id]', 'FrontController#producto' );
	
	$match = $router->match();
	//Sirve para ver si la ruta a la cual está accediendo el cliente, existe de verdad

	if ($match === false) {
		open404Error();
	}else{
		callController($match);
	}


	function open404Error(){
		//cabecera de php concatenado con 404 not found, el navegador leerá la cabecera y también lo reconocerá como un error 404, y ésto es sobre todo para que google sepa que cualquier cosa no es nuestra página, sino comenzaría a procesar que toda petición es una página de nuestro portal
		header( $_SERVER["SERVER_PROTOCOL"] . '404 Not Found');
		//creamos un nuevo objeto de frontcontroller
		$controllerObject = new App\Controllers\FrontController;
		//ejecutamos el metodo error404
		$controllerObject->error404();
	}


	function callController($match){

		list( $controller, $action ) = explode ( '#', $match['target'] );
		$controller = 'App\\Controllers\\' . $controller;
		if ( method_exists($controller, $action)) {
			$controllerObject = new $controller;
			call_user_func_array(array($controllerObject,$action), $match['params']);
		} else {
			open404Error();
		}

	}