<?php
// Include autoloader
require_once 'dompdf/autoload.inc.php';

// Reference the Dompdf namespace
use Dompdf\Dompdf;

// Instantiate and use the dompdf class
$dompdf = new Dompdf(array('isPhpEnabled' => true));

// Load content from html file
ob_start();
include_once 'pdfcontent.php';
$output = ob_get_clean();
$dompdf->loadHtml($output);

//$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('b4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF (1 = download and 0 = preview)
$dompdf->stream("funeral",array("Attachment"=>0));
?>