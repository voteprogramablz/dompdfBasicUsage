<?php


use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf extends Dompdf
{

  public function __construct()
  {
    $this->options = new Options();
    $this->options->setChroot('./');
    $this->options->setIsRemoteEnabled(true);
    $this->dompdf = new Dompdf($this->options);
  }

  public function renderHtml($html)
  {
    $this->dompdf->loadHtmlFile($html);
    $this->dompdf->render();
    header("Content-type: application/pdf");
    echo $this->dompdf->output();
  }
}
