
<?php
use setasign\Fpdi\Fpdi;

require_once(APPPATH.'/../assets/pdfmerge/TCPDF-master/tcpdf.php');
require_once(APPPATH.'/../assets/pdfmerge/tcpdi/tcpdi.php');
date_default_timezone_set('Asia/Manila');
$date = date('m - d - Y');

  $pdfv2 = new TCPDI(PDF_PAGE_ORIENTATION, 'mm', PDF_PAGE_FORMAT, true, 'UTF-8', false);

  $pdfv2->setSourceFile(APPPATH.'/..//assets/pdf/rec.pdf');
    $tpl = $pdfv2->importPage(1);
  $size = $pdfv2->getTemplateSize($tpl);
   $orientation = $size['h'] > $size['w'] ? 'P' : 'L';
   $pdfv2->setPrintHeader(false);
  $pdfv2->setPrintFooter(false);
  $pdfv2->addPage($orientation);
 //  $pdfv2->useTemplate($tpl, null, null, $size['w'] - 7,  $size['h']-6, TRUE);
   $pdfv2->useTemplate($tpl, null, null, $size['w'],  $size['h'], TRUE);


   switch ($_GET['what']) {
    case 'birthday':
     $what = 'Birth Certificate';
      break;

      case 'death':
      $what = 'Death Certificate';
      break;

      case 'marriage':
      $what = 'Marriage Certificate';
      break;
    default:
    $what= null;
      break;
  }


   $pdfv2->addpage();
   $pdfv2->deletePage(1);
  // $pdfv2->Text(55,46 , $date);
  // $pdfv2->Text(17,61 , ($_GET['payor'] == null ? 'no payor input!' : $_GET['payor']));
  // $pdfv2->Text(8,78 , ($_GET['what'] == null ? '0' : $what));
  // $pdfv2->Text(45,78 , ($_GET['orno'] == null ? '0' : $_GET['orno']));
  // $pdfv2->Text(75,78 , ($_GET['totalpay'] == null ? '0' : $_GET['totalpay']));
  // $pdfv2->Text(75,120 , ($_GET['totalpay'] == null ? '0' : $_GET['totalpay']));


  $pdfv2->Text(55,50 , $date);
  $pdfv2->Text(17,59 , 'City Goverment of San Pablo');
  $pdfv2->Text(77,59 , 'Gr A');
  $pdfv2->Text(17,66 , ($_GET['payor'] == null ? 'no payor input!' : $_GET['payor']));
  $pdfv2->Text(8,84 , ($_GET['what'] == null ? '0' : $what));
  $pdfv2->Text(47,84 , ($_GET['orno'] == null ? '0' : $_GET['orno']));
  $pdfv2->Text(75,84 , ($_GET['totalpay'] == null ? '0' : $_GET['totalpay']));
  $pdfv2->Text(75,127 , ($_GET['totalpay'] == null ? '0' : $_GET['totalpay']));
  $pdfv2->Text(42,171 , 'ARJAN B. BABANI');
  $pdfv2->Text(42,175 , 'CITY TREASURER');
  // $js = 'print(true);';

  // set javascript
  ob_start();
  ob_clean();
  


$pdfv2->IncludeJS("print(true);");
   $pdfv2->Output('print.pdf', 'I');

?>
