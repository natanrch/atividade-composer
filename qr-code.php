<?php

require_once 'vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Respect\Validation\Validator as v;

$nome = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data-de-nascimento'];

$emailValido = v::email()->validate($email);
$dataValida = v::date('d-m-Y')->validate($data);

// if ($emailValido) {
// 	echo 'E-mail válido!';
// } else {
// 	echo 'E-mail inválido!';
// }

// if ($dataValida) {
// 	echo '<br> Data válida';
// } else {
// 	echo '<br> Data inválida';
// }



if ($dataValida && $emailValido) {

	$qrCode = new QrCode($nome);

	header('Content-Type: '.$qrCode->getContentType());
	echo $qrCode->writeString();
}
