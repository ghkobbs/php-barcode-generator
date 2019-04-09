<?php
include('barcode/BarcodeGenerator.php');
include('barcode/BarcodeGeneratorPNG.php');
include('barcode/BarcodeGeneratorSVG.php');
include('barcode/BarcodeGeneratorJPG.php');
include('barcode/BarcodeGeneratorHTML.php');

$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
$code = "0000000000";
$qty = 2000;

for ($i = 1; $i <= $qty; $i++) {

    $code = sprintf("%'.010d", $i);
    echo $generator->getBarcode("$code", $generator::TYPE_EAN_13);

}