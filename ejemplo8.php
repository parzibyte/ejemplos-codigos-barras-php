<?php
/**
 * Ejemplo 8 para generar códigos de barras
 * con PHP
 *
 * Cambiar color, anchura y altura
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
$factorAnchura = 4; # En pixeles
$altura = 200; # En pixeles
# Sería el color #8bc34a (mi favorito) en RGB
$color = array(139, 195, 74);
#Recomiendo: https://parzibyte.me/blog/2018/10/11/sintaxis-corta-array-php/

$imagen = $generador->getBarcode($texto, $tipo, $factorAnchura, $altura, $color);

# Encabezado para que el navegador sepa que es una imagen
header("Content-type: image/png");
# Hora de imprimir
echo $imagen;
