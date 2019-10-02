
<?php
use setasign\Fpdi\Fpdi;

require_once(APPPATH.'/../assets/pdfmerge/TCPDF-master/tcpdf.php');
require_once(APPPATH.'/../assets/pdfmerge/tcpdi/tcpdi.php');
date_default_timezone_set('Asia/Manila');
$date = date('Y-m-d');

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
  $pdfdeath->Text(41, 82,  $pageno);
  $pdfdeath->Text(86, 82,  $bookno);
  $pdfdeath->Text(75, 93,  $reference_num);
  $pdfdeath->Text(75, 101, $death_date_reg);
  $pdfdeath->Text(75, 108, $name_deceased);
  $pdfdeath->Text(75, 116, $sex);
  $pdfdeath->Text(75, 123, $age);
  $pdfdeath->Text(75, 131, $civilstats);
  $pdfdeath->Text(75, 139, $nationality);
  $pdfdeath->Text(75, 147, $death_day);
  $pdfdeath->Text(75, 154, $place_death);
  $pdfdeath->Text(75, 162,$cause_death);
  $pdfdeath->Text(20, 180, "THIS CERTIFICATION is issued to ".$issued." upon his/her request.");
  $pdfdeath->Text(149,197, "Victoria G. Maloles");
  $pdfdeath->Text(78,224, "Jem Perilla Hila");
  $pdfdeath->Text(44,235, "Php 50.00");
  $pdfdeath->Text(44,241, $ornum);
  $pdfdeath->Text(44,247, $date);


  // $js = 'print(true);';
  // set javascript
  ob_end_clean();

  $pdfdeath->Output('print.pdf', 'I');

?>
