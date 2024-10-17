<?php
require_once 'Modelo/Cliente.php'; // Esto es como @import
require_once 'Modelo/ProductoFisico.php';

$c1 = new Cliente("Pablo Mayo");
$c2 = new Cliente("Rocío Gonzalez");

$ProductoFisico = new ProductoFisico("Telefono", 1000, 0.5);
echo "Nombre" . $ProductoFisico->getNombre();
 


?>

<ol>

<li><?= $c1 -> getNombre()?></li>
<li><?= $c2 -> getNombre()?></li>
</ol>