<?php
// Autoload composer
require __DIR__ . '/vendor/autoload.php';

include_once 'Controllers/pdfController.php';

$pdf = new Pdf;

$pdf->renderHtml(__DIR__ . '\pdfsLayouts\arquivo.html');

// Instancia de options;

// $options = new Options();
// $options->setChroot(__DIR__);
// $options->setIsRemoteEnabled(true);

// $dompdf = new Dompdf($options);

// // Carrega o html para dentro da classe
// // $dompdf->loadhtml("<b>Olá mundo!</b>");


// $dompdf->loadHtmlFile(__DIR__ . '\pdfsLayouts\arquivo.html');
// $dompdf->setPaper("A4", "portrait");

// //Renderiza o arquivo pdf
// $dompdf->render();

// // Retorna todo o conteudo do arquivo pdf
// header('Content-type: application/pdf');
// echo $dompdf->output();

// // $dompdf->stream(date('Ymdhis').'_relatorio');

// //Salvar arquivo no disco

// // file_put_contents(__DIR__ . '/arquivo.pdf', $dompdf->output());

// echo "Arquivo salvo no disco :D";
