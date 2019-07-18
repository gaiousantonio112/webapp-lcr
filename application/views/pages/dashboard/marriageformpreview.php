
<?php
use setasign\Fpdi\Fpdi;

require_once(APPPATH.'/../assets/pdfmerge/TCPDF-master/tcpdf.php');
require_once(APPPATH.'/../assets/pdfmerge/tcpdi/tcpdi.php');
date_default_timezone_set('Asia/Manila');
$date = date('Y-m-d');

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
  $pdfmarriage->Text(47, 82, $pageno);
  $pdfmarriage->Text(92, 82, $bookno);
  $pdfmarriage->Text(75, 101, $husband_name);
  $pdfmarriage->Text(75, 108, $hus_age);
  $pdfmarriage->Text(75, 116, $Husband_Nationality);
  $pdfmarriage->Text(75, 123, $hus_civil_status);
  $pdfmarriage->Text(75, 131, $husband_mother);
  $pdfmarriage->Text(75, 139, $husband_father);

  $pdfmarriage->Text(145, 101, $wife_name);
  $pdfmarriage->Text(145, 108, $wife_age);
  $pdfmarriage->Text(145, 116, $Wife_Nationality);
  $pdfmarriage->Text(145, 123, $wife_civil_status);
  $pdfmarriage->Text(145, 131, $wife_mother);
  $pdfmarriage->Text(145, 139, $wife_father);

  $pdfmarriage->Text(75, 152, $lcr_registry_num);
  $pdfmarriage->Text(75, 160, $date_reg);
  $pdfmarriage->Text(75, 168, $date_marriage);
  $pdfmarriage->Text(75, 175, $place_marriage);
  $pdfmarriage->Text(20, 188, "THIS CERTIFICATION is issued to ".$issued." upon his/her request.");
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
