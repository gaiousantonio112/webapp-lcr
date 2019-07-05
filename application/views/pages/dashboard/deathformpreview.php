
<?php
use setasign\Fpdi\Fpdi;

require_once(APPPATH.'/../assets/pdfmerge/TCPDF-master/tcpdf.php');
require_once(APPPATH.'/../assets/pdfmerge/tcpdi/tcpdi.php');
date_default_timezone_set('Asia/Manila');
$date = date('m - d - Y');

  $pdfbirth = new TCPDI(PDF_PAGE_ORIENTATION, 'mm', PDF_PAGE_FORMAT, true, 'UTF-8', false);

  $pdfbirth->setSourceFile(APPPATH.'/..//assets/pdf/lcrform_death.pdf');
  $tpl = $pdfbirth->importPage(1);
  $size = $pdfbirth->getTemplateSize($tpl);
  $orientation = $size['h'] > $size['w'] ? 'P' : 'L';
  $pdfbirth->setPrintHeader(false);
  $pdfbirth->setPrintFooter(false);
  $pdfbirth->addPage($orientation);
  $pdfbirth->useTemplate($tpl, null, null, 0, 0, TRUE);

  $pdfbirth->Text(160, 12, "No. Control Number");
  $pdfbirth->Text(176, 60, "Date printed");
  $pdfbirth->Text(29, 82, "Page#");
  $pdfbirth->Text(73, 82, "Book#");
  $pdfbirth->Text(75, 93, "LCR Registry Number");
  $pdfbirth->Text(75, 101, "Date of registration");
  $pdfbirth->Text(75, 108, "Name_of_Deceased");
  $pdfbirth->Text(75, 116, "Sex");
  $pdfbirth->Text(75, 123, "Age");
  $pdfbirth->Text(75, 131, "Civil Status");
  $pdfbirth->Text(75, 139, "Nationality");
  $pdfbirth->Text(75, 147, "Date of Death");
  $pdfbirth->Text(75, 154, "Place of death");
  $pdfbirth->Text(75, 162, "Cause of Death");
  $pdfbirth->Text(20, 180, "THIS CERTIFICATION is issued to <Issued_to> upon his/her request.");
  $pdfbirth->Text(149,197, "City_Civil_Registrar");
  $pdfbirth->Text(78,224, "Processed By");
  $pdfbirth->Text(44,235, "Amount Paid");
  $pdfbirth->Text(44,241, "OR_#");
  $pdfbirth->Text(44,247, "Date Paid");


  // $js = 'print(true);';
  // set javascript
  ob_end_clean();

  $pdfbirth->Output('print.pdf', 'I');

?>
