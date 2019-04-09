<?php
include('barcode/BarcodeGenerator.php');
include('barcode/BarcodeGeneratorPNG.php');
include('barcode/BarcodeGeneratorSVG.php');
include('barcode/BarcodeGeneratorJPG.php');
include('barcode/BarcodeGeneratorHTML.php');

$generator = new Picqer\Barcode\BarcodeGeneratorHTML();

for ($i = 0; $i < 2000; $i++) {

$code = rand(000000000000, 999999999999);

echo $generator->getBarcode($code, $generator::TYPE_EAN_13);

}