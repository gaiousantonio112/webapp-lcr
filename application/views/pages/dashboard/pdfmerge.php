<?php
use setasign\Fpdi\Fpdi;

require_once(APPPATH.'/../assets/pdfmerge/TCPDF-master/tcpdf.php');
require_once(APPPATH.'/../assets/pdfmerge/tcpdi/tcpdi.php');
date_default_timezone_set('Asia/Manila');
$date = date('Y-m-d');
// $pdf = new TCPDI(PDF_PAGE_ORIENTATION, 'mm', PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf = new TCPDI();

$pdf->setSourceFile('\\\\192.168.100.164\\lcr\\'.$type.'\\'.$ref_num.'.pdf');
  // f_id
  // ref_num
  // or_no
  // name_cus
  // name_encoder
  // type
  // paid
  // page substr("testers", -1)   $firstCharacter = substr($string, 0, 1)
  // copy
  // print

// this will declare the number of pages
$pageNo = 1;
$pageCount = 2;
$stringData = 'Date Now:'.$date.' Reference Number:'.$ref_num.' OR NO:'.$or_num.' Date Paid:'.$date_paid.' Encoder Name:'.$cs_encoder;

// $stringData = 'Date Now:'.$date.' Reference Number:'.;
switch ($print) {
  case 'Default':
    // two pages
    $pageNo =1;
    $pageCount = 2;
    break;
  case 'Specific':
    // on page
    $pageNo = $page;
    $pageCount = $page;
    break;
  case 'Ranges':
    // specific range
    $pageNo = substr($page, 0, 1);
    $pageCount = substr($page, -1);
    break;
  default:
    // code...
    break;
}


for ($pageNo; $pageNo <= $pageCount; $pageNo++) {
  //$tplIdx = $pdf->importPage(2);
  //
  // $tpl = $pdf->importPage($pageNo);
  // $size = $pdf->getTemplateSize($tpl);
  // $orientation = $size['h'] > $size['w'] ? 'P' : 'L';
  // $pdf->setPrintHeader(false);
  // $pdf->setPrintFooter(false);
  // $pdf->addPage($orientation);
  // $pdf->useTemplate($tpl, null, null, 0, 0, TRUE);


  $tpl = $pdf->importPage($pageNo);
  $size = $pdf->getTemplateSize($tpl);
  // $orientation = $size['h'] > $size['w'] ? 'P' : 'L';

  $pdf->setPrintHeader(false);
  $pdf->setPrintFooter(false);
    $pdf->addPage();
  // $pdf->useTemplate($tpl, null, null, 0, 0, TRUE);
  $pdf ->useTemplate($tpl, null, null, $size['w'], 300, FALSE);

  // $pageCount = $pdf->setSourceFile("apps/Par.pdf"); .' Page no '.$pageNo.' Wha print'.$_GET['print']

  $pdf->StartTransform();
  // Rotate 20 degrees counter-clockwise centered by (70,110) which is the lower left corner of the rectangle
  $pdf->Rotate(90, 25, 240);
  $pdf->Text(0, 220, $stringData);
  // Stop Transformation
  $pdf->StopTransform();


  $pdf->StartTransform();
  // Rotate 20 degrees counter-clockwise centered by (70,110) which is the lower left corner of the rectangle
  $pdf->Rotate(-90, 85, 120);
  $pdf->Text(0, 0, $stringData);
  // Stop Transformation
  $pdf->StopTransform();

}
//print function
$pdf->IncludeJS('print(true)');

$pdf->Output('name.pdf', 'I');

?>
