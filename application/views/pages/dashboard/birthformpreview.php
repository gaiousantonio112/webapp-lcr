
<?php
use setasign\Fpdi\Fpdi;

require_once(APPPATH.'/../assets/pdfmerge/TCPDF-master/tcpdf.php');
require_once(APPPATH.'/../assets/pdfmerge/tcpdi/tcpdi.php');
date_default_timezone_set('Asia/Manila');
$date = date('Y/m/d');

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


  //
  // remarks
  $pdfbirth->Text(160, 12, "No. Control Number");
  $pdfbirth->Text(175, 60, $date);
  $pdfbirth->Text(29, 82,$Pageno);
  $pdfbirth->Text(75, 82, $Bookno);
  $pdfbirth->Text(75, 93, $lcr_regno);
  $pdfbirth->Text(75, 101, $date_reg);
  $pdfbirth->Text(75, 108, $name_child);
  $pdfbirth->Text(75, 116, $sex);
  $pdfbirth->Text(75, 123, $bday_date);
  $pdfbirth->Text(75, 131, $birthplace);
  $pdfbirth->Text(75, 139, $mothername);
  $pdfbirth->Text(75, 147, $mothernationality);
  $pdfbirth->Text(75, 154, $fathername);
  $pdfbirth->Text(75, 162, $fathernationality);
  $pdfbirth->Text(75, 170, $marriagedate);
  $pdfbirth->Text(75, 181, "place of marriage here");
  $pdfbirth->Text(20, 199, "THIS CERTIFICATION is issued to ".$issued." upon his/her request.");
  $pdfbirth->Text(149,215, "City_Civil_Registrar");
  $pdfbirth->Text(78,241, "Processed By");
  $pdfbirth->Text(44,252, "Php 50.00");
  $pdfbirth->Text(44,258, $bdayrefnum);
  $pdfbirth->Text(44,264, $date);


  // $js = 'print(true);';
  // set javascript
  ob_end_clean();

  $pdfbirth->Output('print.pdf', 'I');

?>
