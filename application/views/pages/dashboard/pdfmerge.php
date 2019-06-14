<?php
use setasign\Fpdi\Fpdi;

require_once(APPPATH.'/../assets/pdfmerge/TCPDF-master/tcpdf.php');
require_once(APPPATH.'/../assets/pdfmerge/tcpdi/tcpdi.php');
date_default_timezone_set('Asia/Manila');
$date = date('Y-m-d h:i:s a', time());

$pdf = new TCPDI(PDF_PAGE_ORIENTATION, 'mm', PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->setSourceFile(APPPATH.'/..//assets/pdf/1.pdf');
 $tpl = $pdf->importPage(1);
$size = $pdf->getTemplateSize($tpl);
 $orientation = $size['h'] > $size['w'] ? 'P' : 'L';
$pdf->addPage($orientation);
 $pdf->useTemplate($tpl, null, null, 0, 0, TRUE);


 $pdf->StartTransform();
 // Rotate 20 degrees counter-clockwise centered by (70,110) which is the lower left corner of the rectangle
 $pdf->Rotate(90, 25, 240);
 $pdf->Text(0, 220, 'Encoder : '.$whome.' / Date Created and Time : '.$date);
 // Stop Transformation
 $pdf->StopTransform();


  $pdf->StartTransform();
  // Rotate 20 degrees counter-clockwise centered by (70,110) which is the lower left corner of the rectangle
  $pdf->Rotate(-90, 90, 120);
  $pdf->Text(0, 0, 'Encoder : '.$whome.' / Date Created and Time : '.$date);
  // Stop Transformation
  $pdf->StopTransform();

$pdf->Output('name.pdf', 'I');

?>
