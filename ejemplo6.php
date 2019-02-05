<?php
/**
 * Ejemplo 6 para generar códigos de barras
 * con PHP
 *
 * Generar código y mostrar dependiendo de parámetro GET
 *
 * @author parzibyte
 */

 # Si no hay parámetro, salir
 # https://parzibyte.me/blog/2018/08/09/isset-vs-empty-en-php/
 if(empty($_GET["texto"])) exit("No proporcionaste el texto en la URL");

# Incluimos el autoload
require_once "vendor/autoload.php";

# Indicamos que usaremos el namespace de BarcodeGeneratorPNG
use Picqer\Barcode\BarcodeGeneratorPNG;

# Crear generador
$generador = new BarcodeGeneratorPNG();

# Ajustes
$texto = $_GET["texto"];
$tipo = $generador::TYPE_CODE_128;

$imagen = $generador->getBarcode($texto, $tipo);

header("Content-type: image/png");
echo $imagen;

# No imprimas nada después de esto
