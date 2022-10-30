<?php

require 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
 
$dompdf = new Dompdf();
$dompdf->setPaper('A4', 'landscape');

ob_start();
include 'Certificado.php';
$html = ob_get_clean();
        
$dompdf->loadHtml($html);

$dompdf->render();

$dompdf->stream("MyCertificate.pdf", [ "Attachment" => true]);

?>