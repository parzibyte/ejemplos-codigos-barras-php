<?php
/**
 * Ejemplo 4 para generar códigos de barras
 * con PHP
 *
 * Guardar código de barras en el disco duro
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

# Aquí se guarda la imagen
$nombreArchivo = "codigo.png";

# Escribir los datos
$bytesEscritos = file_put_contents($nombreArchivo, $imagen);

# Comprobar si todo fue bien
if ($bytesEscritos !== false) {
    echo "Correcto. Se escribieron $bytesEscritos bytes en $nombreArchivo";
} else {
    echo "Error guardando código de barras";
}
