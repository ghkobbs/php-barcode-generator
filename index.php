<?php
include('barcode/BarcodeGenerator.php');
include('barcode/BarcodeGeneratorPNG.php');
include('barcode/BarcodeGeneratorSVG.php');
include('barcode/BarcodeGeneratorJPG.php');
include('barcode/BarcodeGeneratorHTML.php');

$generator = new Picqer\Barcode\BarcodeGeneratorHTML();

$code = "0000000000";
$qty = 99;
$name = "National Banking College";

?>

<div class="wrapper">
<?php

for ($i = 1; $i <= $qty; $i++) {

    $code = sprintf("%'.010d", $i);
    echo "<div class='push-left' style='width: calc(100% / 3); float: left'><p style='width:190px; text-align: center; margin:0'>".$name."</p>".$generator->getBarcode("$code", $generator::TYPE_EAN_13)."</div>";

    
}?>
</div>