
<?php
use setasign\Fpdi\Fpdi;

require_once(APPPATH.'/../assets/pdfmerge/TCPDF-master/tcpdf.php');
require_once(APPPATH.'/../assets/pdfmerge/tcpdi/tcpdi.php');
date_default_timezone_set('Asia/Manila');
$date = date('m - d - Y');

  $pdf = new TCPDI(PDF_PAGE_ORIENTATION, 'mm', PDF_PAGE_FORMAT, true, 'UTF-8', false);

  $pdf->setSourceFile(APPPATH.'/..//assets/pdf/rec.pdf');
    $tpl = $pdf->importPage(1);
  $size = $pdf->getTemplateSize($tpl);
   $orientation = $size['h'] > $size['w'] ? 'P' : 'L';
   $pdf->setPrintHeader(false);
  $pdf->setPrintFooter(false);
  $pdf->addPage($orientation);
   $pdf->useTemplate($tpl, null, null, 0, 0, TRUE);



   $pdf->addpage();
   $pdf->deletePage(1);
  $pdf->Text(55,50 , $date);
  $pdf->Text(17,65 , ($_GET['payor'] == null ? 'no payor input!' : $_GET['payor']));
  $pdf->Text(10,83 , ($_GET['what'] == null ? '0' : $_GET['what']));

  $pdf->Text(47,83 , ($_GET['orno'] == null ? '0' : $_GET['orno']));
  $pdf->Text(75,83 , ($_GET['totalpay'] == null ? '0' : $_GET['totalpay']));

  $pdf->Text(75,125 , ($_GET['totalpay'] == null ? '0' : $_GET['totalpay']));

  $js .= 'print(true);';

  // set javascript

   $pdf->Output('print.pdf', 'I');

?>
