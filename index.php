<?php
require_once "vendor/autoload.php";

use Dompdf\Dompdf;

$dompdf=new Dompdf();

// instantiate and use the dompdf class
$dompdf->loadHtml('<h1>hello world</h1>');
 
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');
  
// Render the HTML as PDF
$dompdf->render();
  
// Output the generated PDF to Browser
$dompdf->stream();




