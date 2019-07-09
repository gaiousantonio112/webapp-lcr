
<?php
use setasign\Fpdi\Fpdi;

require_once(APPPATH.'/../assets/pdfmerge/TCPDF-master/tcpdf.php');
require_once(APPPATH.'/../assets/pdfmerge/tcpdi/tcpdi.php');
date_default_timezone_set('Asia/Manila');
$date = date('m - d - Y');

  $pdfdeath = new TCPDI(PDF_PAGE_ORIENTATION, 'mm', PDF_PAGE_FORMAT, true, 'UTF-8', false);

  $pdfdeath->setSourceFile(APPPATH.'/..//assets/pdf/lcrform_death.pdf');
  $pdfdeath->SetDisplayMode(100);
  $tpl = $pdfdeath->importPage(1);
  $size = $pdfdeath->getTemplateSize($tpl);
  $orientation = $size['h'] > $size['w'] ? 'P' : 'L';
  $pdfdeath->setPrintHeader(false);
  $pdfdeath->setPrintFooter(false);
  $pdfdeath->addPage($orientation);
  $pdfdeath->useTemplate($tpl, null, null, 0, 0, TRUE);

  $pdfdeath->Text(160, 12, "No. Control Number");
  $pdfdeath->Text(176, 60, "Date printed");
  $pdfdeath->Text(41, 82, "Page#");
  $pdfdeath->Text(86, 82, "Book#");
  $pdfdeath->Text(75, 93, "LCR Registry Number");
  $pdfdeath->Text(75, 101, "Date of registration");
  $pdfdeath->Text(75, 108, "Name_of_Deceased");
  $pdfdeath->Text(75, 116, "Sex");
  $pdfdeath->Text(75, 123, "Age");
  $pdfdeath->Text(75, 131, "Civil Status");
  $pdfdeath->Text(75, 139, "Nationality");
  $pdfdeath->Text(75, 147, "Date of Death");
  $pdfdeath->Text(75, 154, "Place of death");
  $pdfdeath->Text(75, 162, "Cause of Death");
  $pdfdeath->Text(20, 180, "THIS CERTIFICATION is issued to <Issued_to> upon his/her request.");
  $pdfdeath->Text(149,197, "City_Civil_Registrar");
  $pdfdeath->Text(78,224, "Processed By");
  $pdfdeath->Text(44,235, "Amount Paid");
  $pdfdeath->Text(44,241, "OR_#");
  $pdfdeath->Text(44,247, "Date Paid");


  // $js = 'print(true);';
  // set javascript
  ob_end_clean();

  $pdfdeath->Output('print.pdf', 'I');

?>
