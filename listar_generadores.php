<?php
/**
 * Ejemplo 2 para generar códigos de barras
 * con PHP
 *
 * Ejemplificar generadores
 *
 * @author parzibyte
 */

# Incluimos el autoload
require_once "vendor/autoload.php";

# 4 generadores
use Picqer\Barcode\BarcodeGeneratorHTML;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Picqer\Barcode\BarcodeGeneratorJPG;
use Picqer\Barcode\BarcodeGeneratorSVG;

# Crear generadores
$generadorDeHTML = new BarcodeGeneratorHTML();
$generadorDePNG = new BarcodeGeneratorPNG();
$generadorDeJPG = new BarcodeGeneratorJPG();
$generadorDeSVG = new BarcodeGeneratorSVG();

# Ajustes
$texto = "parzibyte.me";
$tipo = $generadorDeHTML::TYPE_CODE_128;

$comoHTML = $generadorDeHTML->getBarcode($texto, $tipo);
$comoPNG = $generadorDePNG->getBarcode($texto, $tipo);
$comoJPG = $generadorDeJPG->getBarcode($texto, $tipo);
$comoSVG = $generadorDeSVG->getBarcode($texto, $tipo);
# Nota: no imprimimos nada