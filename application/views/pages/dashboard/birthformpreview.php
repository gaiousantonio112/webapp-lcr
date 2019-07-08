
<?php
use setasign\Fpdi\Fpdi;

require_once(APPPATH.'/../assets/pdfmerge/TCPDF-master/tcpdf.php');
require_once(APPPATH.'/../assets/pdfmerge/tcpdi/tcpdi.php');
date_default_timezone_set('Asia/Manila');
$date = date('m - d - Y');

  $pdfbirth = new TCPDI(PDF_PAGE_ORIENTATION, 'mm', PDF_PAGE_FORMAT, true, 'UTF-8', false);

  $pdfbirth->setSourceFile(APPPATH.'/..//assets/pdf/lcrform_birth.pdf');
  $pdfbirth->SetDisplayMode(100);
  $tpl = $pdfbirth->importPage(1);
  $size = $pdfbirth->getTemplateSize($tpl);
  $orientation = $size['h'] > $size['w'] ? 'P' : 'L';
  $pdfbirth->setPrintHeader(false);
  $pdfbirth->setPrintFooter(false);
  $pdfbirth->addPage($orientation);
  $pdfbirth->useTemplate($tpl, null, null, 0, 0, TRUE);

  $pdfbirth->Text(160, 12, "No. Control Number");
  $pdfbirth->Text(175, 60, "Date printed");
  $pdfbirth->Text(29, 82, "Page#");
  $pdfbirth->Text(75, 82, "Book#");
  $pdfbirth->Text(75, 93, "LCR Registry Number");
  $pdfbirth->Text(75, 101, "Date of registration");
  $pdfbirth->Text(75, 108, "Name_of_Child");
  $pdfbirth->Text(75, 116, "Sex");
  $pdfbirth->Text(75, 123, "Date_of_Birth");
  $pdfbirth->Text(75, 131, "Place_of_Birth");
  $pdfbirth->Text(75, 139, "Name_of_Mother");
  $pdfbirth->Text(75, 147, "Nationality_of_Mother");
  $pdfbirth->Text(75, 154, "Name_of_Father");
  $pdfbirth->Text(75, 162, "Nationality_of_Father");
  $pdfbirth->Text(75, 170, "Date_of_Marriage_of_Parents");
  $pdfbirth->Text(75, 181, "Place_of_Marriage_of_Parents");
  $pdfbirth->Text(20, 199, "THIS CERTIFICATION is issued to <Issued_to> upon his/her request.");
  $pdfbirth->Text(149,215, "City_Civil_Registrar");
  $pdfbirth->Text(78,241, "Processed By");
  $pdfbirth->Text(44,252, "Amount Paid");
  $pdfbirth->Text(44,258, "OR_#");
  $pdfbirth->Text(44,264, "Date Paid");


  // $js = 'print(true);';
  // set javascript
  ob_end_clean();

  $pdfbirth->Output('print.pdf', 'I');

?>
