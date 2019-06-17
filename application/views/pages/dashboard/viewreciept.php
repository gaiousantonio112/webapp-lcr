<?php
use setasign\Fpdi\Fpdi;

require_once(APPPATH.'/../assets/pdfmerge/TCPDF-master/tcpdf.php');
require_once(APPPATH.'/../assets/pdfmerge/tcpdi/tcpdi.php');
date_default_timezone_set('Asia/Manila');
$date = date('Y-m-d h:i:s a', time());

$pdf = new TCPDI(PDF_PAGE_ORIENTATION, 'mm', PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->setSourceFile(APPPATH.'/..//assets/pdf/rec.pdf');
 $tpl = $pdf->importPage(1);
$size = $pdf->getTemplateSize($tpl);
 $orientation = $size['h'] > $size['w'] ? 'P' : 'L';
 $pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->addPage($orientation);
 $pdf->useTemplate($tpl, null, null, 0, 0, TRUE);

$pdf->Text(55,50 , 'DAte Now');
$pdf->Text(10,83 , 'Birthday Print');

$pdf->Text(75,83 , '50 ');

$pdf->Text(75,125 , '50 ');

 $pdf->Output('name.pdf', 'I');
  ?>
