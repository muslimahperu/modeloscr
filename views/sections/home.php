<?php $this->layout('layouts/layout') ?>

<h1> Separando las vistas</h1>

<p> Estamos haciendo la separacion de las vistas</p>


<?php $this->insert('partials/some-markup',['courseTitle'=> 'El titulo']); ?>
<?php $this->start('footerLinks') ?>

<p>
	<a href="/otra/carpeta"> Otra ruta </a>
	<a href="/producto/1"> Producto 1 </a>	
	<a href="/producto/2">Producto 2</a>
</p>
$<?php $this->stop() ?>