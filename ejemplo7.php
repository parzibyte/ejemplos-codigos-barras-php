<?php
/**
 * Ejemplo 7 para generar códigos de barras
 * con PHP
 *
 * Poner múltiples imágenes cuya fuente será
 * el script del ejemplo 6
 *
 * @author parzibyte
 */
# Un arreglo de códigos para ejemplificar
$codigos = [
    "123", 
    "666", 
    "parzibyte.me", 
    "hola", 
    "885548",
    "php.net",
    "ABC-123"
];
?>
<!-- Y ahora hacer un ciclo en donde se imprimen las imágenes -->
<?php foreach ($codigos as $codigo) {?>
<h4>Con código <?php echo $codigo; ?>: </h4>
<img src="ejemplo6.php?texto=<?php echo $codigo; ?>">
<?php }?>