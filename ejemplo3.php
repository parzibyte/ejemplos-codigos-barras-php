<?php
/**
 * Ejemplo 3 para generar códigos de barras
 * con PHP
 *
 * Generar imagen PNG y mostrarla en navegador
 *
 * @author parzibyte
 */

# Incluimos el autoload
require_once "vendor/autoload.php";

# Indicamos que usaremos el namespace de BarcodeGeneratorPNG
use Picqer\Barcode\BarcodeGeneratorPNG;

# Crear generador
$generador = new BarcodeGeneratorPNG();

# Ajustes
$texto = "parzibyte.me";
$tipo = $generador::TYPE_CODE_128;

$imagen = $generador->getBarcode($texto, $tipo);

# Encabezado para que el navegador sepa que es una imagen
header("Content-type: image/png");
# Hora de imprimir
echo $imagen;
