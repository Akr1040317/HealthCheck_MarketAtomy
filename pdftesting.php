<?php

require_once('tcpdf/config/tcpdf_config.php');
require_once('tcpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set default font subsetting mode
$pdf->setFontSubsetting(true);
// set margins
//$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
//$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
// set default header data
$pdf->SetHeaderData('', '', 'Hello ','Gudmrng', array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

 // set default monospaced font
 $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

 // set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
 $pdf->SetFont('dejavusans', '', 10, '', true);
 //     $pdf->SetFont('helvetica', '', 8);
  // Add a page
 // This method has several options, check the source code documentation for more information.
$pdf->AddPage();
 $tbl_header = '<h2 style="color:blue;text-align: center;font-size: 14px;">Headding</h2></br>';

 $html = '<table width="530" cellspacing="0" cellpadding="3" border="1">
                    <tr>
                    <th style="text-align: center;font-size: 10px;font-weight: bold;width:100px;">heading 1</th>
                    <th style="text-align: center;font-size: 10px;font-weight: bold;width:122px;">heading 2</th>
                    </tr>';
                        $html .= '<tr>';
                        $html .=  '<td><b>Hello World</b></td>';
                        $html .= '<td><b>Helo </b></td>';
                        $html .=  '</tr>';
                        $html .=  '</table>';


 $pdf->writeHTML($tbl_header . $html, true, false, false, false, '');
 //$pdf->writeHTML($html, true, 0);
 //$pdf->writeHTML($html, true, 0);


  $pdf->Output('test_1.pdf','I');

 ?>