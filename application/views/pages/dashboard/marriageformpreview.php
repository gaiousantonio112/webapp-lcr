
<?php
use setasign\Fpdi\Fpdi;

require_once(APPPATH.'/../assets/pdfmerge/TCPDF-master/tcpdf.php');
require_once(APPPATH.'/../assets/pdfmerge/tcpdi/tcpdi.php');
date_default_timezone_set('Asia/Manila');
$date = date('m - d - Y');

  $pdfmarriage = new TCPDI(PDF_PAGE_ORIENTATION, 'mm', PDF_PAGE_FORMAT, true, 'UTF-8', false);

  $pdfmarriage->setSourceFile(APPPATH.'/..//assets/pdf/lcrform_marriage.pdf');
  $pdfmarriage->SetDisplayMode(100);
  $tpl = $pdfmarriage->importPage(1);
  $size = $pdfmarriage->getTemplateSize($tpl);
  $orientation = $size['h'] > $size['w'] ? 'P' : 'L';
  $pdfmarriage->setPrintHeader(false);
  $pdfmarriage->setPrintFooter(false);
  $pdfmarriage->addPage($orientation);
  $pdfmarriage->useTemplate($tpl, null, null, 0, 0, TRUE);

  $pdfmarriage->Text(160, 12, "No. Control Number");
  $pdfmarriage->Text(176, 60, "Date printed");
  $pdfmarriage->Text(29, 82, "Page#");
  $pdfmarriage->Text(73, 82, "Book#");
  $pdfmarriage->Text(75, 101, "Husband_Name");
  $pdfmarriage->Text(75, 108, "Husband_Age");
  $pdfmarriage->Text(75, 116, "Husband_Nationality");
  $pdfmarriage->Text(75, 123, "Husband_Civil_Status");
  $pdfmarriage->Text(75, 131, "Husband_Mother");
  $pdfmarriage->Text(75, 139, "Husband_Father");

  $pdfmarriage->Text(145, 101, "Wifes_Name");
  $pdfmarriage->Text(145, 108, "Wife_Age");
  $pdfmarriage->Text(145, 116, "Wife_Nationality");
  $pdfmarriage->Text(145, 123, "Wife_Civil_Status");
  $pdfmarriage->Text(145, 131, "Wife_Mother");
  $pdfmarriage->Text(145, 139, "Wife_Father");

  $pdfmarriage->Text(75, 152, "LCR REgistry Number ");
  $pdfmarriage->Text(75, 160, "Date_of_Registration");
  $pdfmarriage->Text(75, 168, "Date_of_Marriage");
  $pdfmarriage->Text(75, 175, "Place_of_Marriage");
  $pdfmarriage->Text(20, 188, "THIS CERTIFICATION is issued to <Issued_to> upon his/her request.");
  $pdfmarriage->Text(149,205, "City_Civil_Registrar");
  $pdfmarriage->Text(78,232, "Processed By");
  $pdfmarriage->Text(44,242, "Amount Paid");
  $pdfmarriage->Text(44,248, "OR_#");
  $pdfmarriage->Text(44,254, "Date Paid");


  // $js = 'print(true);';
  // set javascript
  ob_end_clean();

  $pdfmarriage->Output('print.pdf', 'I');

?>
