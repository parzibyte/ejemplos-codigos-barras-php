<?php
/**
 * Ejemplo 5 para generar códigos de barras
 * con PHP
 *
 * Forzar descarga de imagen con código de barras
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

# Sugerir nombre para guardar
$nombreArchivo = "codigo_de_barras.png";

# Imprimir encabezados
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=$nombreArchivo");
echo $imagen;

# No imprimas nada después de esto
