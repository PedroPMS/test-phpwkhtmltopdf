<?php

require_once 'vendor/autoload.php'; // carregando o autoload

use mikehaertl\wkhtmlto\Pdf; //instanciando a classe de Pdf
use mikehaertl\wkhtmlto\Image; //instanciando a classe de Imagem

$binaryPdf = 'C:/Program Files/wkhtmltopdf/bin/wkhtmltopdf.exe'; //definindo o caminho do binário
$binaryImage = 'C:/Program Files/wkhtmltopdf/bin/wkhtmltoimage.exe'; //definindo o caminho do binário

$pdf = new Pdf('google.com'); //definindo qual a URL a ser transformada em PDF
$image = new Image('google.com');

$pdf->binary = $binaryPdf; //setando o binário
$image->binary = $binaryImage; //setando o binário

if (!$pdf->saveAs('pdfteste.pdf')) { //salvando como google.pdf e verificando erros
    $error = $pdf->getError();
    print($error);
}

if (!$image->saveAs('imagetest.png')) {
    $error = $image->getError();
    print($error);
}