
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
   $pdfv2->useTemplate($tpl, null, null, $size['w'] - 7,  $size['h']-6, TRUE);



   $pdfv2->addpage();
   $pdfv2->deletePage(1);
  $pdfv2->Text(55,48 , $date);
  $pdfv2->Text(17,63 , ($_GET['payor'] == null ? 'no payor input!' : $_GET['payor']));
 

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


  $pdfv2->Text(8,80 , ($_GET['what'] == null ? '0' : $what));



  $pdfv2->Text(45,80 , ($_GET['orno'] == null ? '0' : $_GET['orno']));
  $pdfv2->Text(75,80 , ($_GET['totalpay'] == null ? '0' : $_GET['totalpay']));

  $pdfv2->Text(75,122 , ($_GET['totalpay'] == null ? '0' : $_GET['totalpay']));

  // $js = 'print(true);';

  // set javascript
  ob_end_clean();

$pdfv2->IncludeJs('print()');
   $pdfv2->Output('print.pdf', 'I');

?>
