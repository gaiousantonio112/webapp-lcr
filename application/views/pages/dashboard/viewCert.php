
<?php
use setasign\Fpdi\Fpdi;

require_once(APPPATH.'/../assets/pdfmerge/TCPDF-master/tcpdf.php');
require_once(APPPATH.'/../assets/pdfmerge/tcpdi/tcpdi.php');
date_default_timezone_set('Asia/Manila');
$date = date('m - d - Y');

$file_pointer = '\\\\192.168.100.164\\lcr\\'.$_GET['type'].'\\'.$_GET['ref'].'.pdf';

        if (file_exists($file_pointer)) {

          $pdfv2 = new TCPDI(PDF_PAGE_ORIENTATION, 'mm', PDF_PAGE_FORMAT, true, 'UTF-8', false);
          $pageCount = $pdfv2->setSourceFile('\\\\192.168.100.164\\lcr\\'.$_GET['type'].'\\'.$_GET['ref'].'.pdf');

        $pageNo = 1;

          for ($pageNo; $pageNo <= $pageCount; $pageNo++) {
              $pdfv2->SetDisplayMode(100);
            $tpl = $pdfv2->importPage($pageNo);
          $size = $pdfv2->getTemplateSize($tpl);
           $orientation = $size['h'] > $size['w'] ? 'P' : 'L';
           $pdfv2->setPrintHeader(false);
          $pdfv2->setPrintFooter(false);
          $pdfv2->addPage($orientation);
           $pdfv2->useTemplate($tpl, null, null, 0, 0, TRUE);


         }
         ob_end_clean();



            $pdfv2->Output('print.pdf', 'I');


        }else {
            echo "The file  does
                                   not exists";
        }


?>
