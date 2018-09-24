<?php

require_once 'vendor/autoload.php';

use Endroid\QrCode\QrCode;

$qrCode = new QrCode('High-octane crazy blood');

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();