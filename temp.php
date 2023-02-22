<!-- style tag with Dompdf -->

$html = '
<style>
h1{
    color:yellow;
}
</style>
<h1>hello world</h1>
';
$dompdf->loadHtml($html);
  
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');
  
// Render the HTML as PDF
$dompdf->render();
  
// Output the generated PDF to Browser
$dompdf->stream();

<!-- Save the Generated PDF File -->

$html = file_get_contents('test.html'); // here test.html is the file name
$dompdf->loadHtml($html);
 
// Render the HTML as PDF
$dompdf->render();
 
//Save to disk
$output = $dompdf->output();
file_put_contents("test.pdf", $output);