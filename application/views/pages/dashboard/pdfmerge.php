<?php
use setasign\Fpdi\Fpdi;

require_once(APPPATH.'/../assets/pdfmerge/TCPDF-master/tcpdf.php');
require_once(APPPATH.'/../assets/pdfmerge/tcpdi/tcpdi.php');



$pdf = new TCPDI(PDF_PAGE_ORIENTATION, 'mm', PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->setSourceFile(APPPATH.'/..//assets/pdf/1.pdf');
 $tpl = $pdf->importPage(1);
$size = $pdf->getTemplateSize($tpl);
 $orientation = $size['h'] > $size['w'] ? 'P' : 'L';
 $pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->addPage($orientation);
 $pdf->useTemplate($tpl, null, null, 0, 0, TRUE);


 $pdf->StartTransform();
 // Rotate 20 degrees counter-clockwise centered by (70,110) which is the lower left corner of the rectangle
 $pdf->Rotate(90, 25, 240);
 $pdf->Text(0, 220, 'JAN DEAN M. PASAJOL JAN DEAN M. PASAJOL JAN DEAN M. PASAJOL JAN DEAN M. PASAJOL JAN DEAN M. PASAJOL');
 // Stop Transformation
 $pdf->StopTransform();


  $pdf->StartTransform();
  // Rotate 20 degrees counter-clockwise centered by (70,110) which is the lower left corner of the rectangle
  $pdf->Rotate(-90, 90, 120);
  $pdf->Text(0, 0, 'JAN DEAN M. PASAJOL JAN DEAN M. PASAJOL JAN DEAN M. PASAJOL JAN DEAN M. PASAJOL JAN DEAN M. PASAJOL');
  // Stop Transformation
  $pdf->StopTransform();


// loopdis bebe

  $tpl = $pdf->importPage(2);

 $size = $pdf->getTemplateSize($tpl);
  $orientation = $size['h'] > $size['w'] ? 'P' : 'L';
  $pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
 $pdf->addPage($orientation);
  $pdf->useTemplate($tpl, null, null, 0, 0, TRUE);


  $pdf->StartTransform();
  // Rotate 20 degrees counter-clockwise centered by (70,110) which is the lower left corner of the rectangle
  $pdf->Rotate(90, 25, 240);
  $pdf->Text(0, 220, 'JAN DEAN M. PASAJOL JAN DEAN M. PASAJOL JAN DEAN M. PASAJOL JAN DEAN M. PASAJOL JAN DEAN M. PASAJOL');
  // Stop Transformation
  $pdf->StopTransform();


   $pdf->StartTransform();
   // Rotate 20 degrees counter-clockwise centered by (70,110) which is the lower left corner of the rectangle
   $pdf->Rotate(-90, 90, 120);
   $pdf->Text(0, 0, 'JAN DEAN M. PASAJOL JAN DEAN M. PASAJOL JAN DEAN M. PASAJOL JAN DEAN M. PASAJOL JAN DEAN M. PASAJOL');
   // Stop Transformation
   $pdf->StopTransform();

$pdf->Output('name.pdf', 'I');

?>
