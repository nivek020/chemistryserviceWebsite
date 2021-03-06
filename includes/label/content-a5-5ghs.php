<?php
$chemName = '<p><b style="font-size:18px">'.htmlspecialchars($chemicalName).'</b></p>';
/*
$left_column = '<p><b style="font-size:14px">'.htmlspecialchars($chemicalName).'</b>

<div class="" style="color:black; font-size:6px; text-align:justify;">
'.htmlspecialchars($lang1).':<br>
<b>'.htmlspecialchars($signalWordLang1).'</b><br>
'.htmlspecialchars($hp_phrases_f_toString).'<br>
'.htmlspecialchars($pp_phrases_f_toString).'<br>
'.htmlspecialchars($pp_phrases_f_toString_prev).'<br>
'.htmlspecialchars($pp_phrases_f_toString_resp).'<br>
'.htmlspecialchars($pp_phrases_f_toString_storage).'<br>
'.htmlspecialchars($pp_phrases_f_toString_disp).'<br>



'.htmlspecialchars($lang2).':<br>
<b>'.htmlspecialchars($signalWordLang2).'</b><br>
'.htmlspecialchars($hp_phrases_s_toString).'<br>
'.htmlspecialchars($pp_phrases_s_toString).'<br>
'.htmlspecialchars($pp_phrases_s_toString_prev).'<br>
'.htmlspecialchars($pp_phrases_s_toString_resp).'<br>
'.htmlspecialchars($pp_phrases_s_toString_storage).'<br>
'.htmlspecialchars($pp_phrases_s_toString_disp).'
</div>
</p>


';
*/

$phrases = $lang1."\n".$signalWordLang1."\n".$hp_phrases_f_toString.$pp_phrases_f_toString.$pp_phrases_f_toString_prev.$pp_phrases_f_toString_resp.$pp_phrases_f_toString_storage.$pp_phrases_f_toString_disp."\n\n".$lang2."\n".$signalWordLang2."\n".$hp_phrases_s_toString.$pp_phrases_s_toString.$pp_phrases_s_toString_prev.$pp_phrases_s_toString_resp.$pp_phrases_s_toString_storage.$pp_phrases_s_toString_disp;

//$signalWord = '<h1 style="font-size:18px; color:black;">'.htmlspecialchars($signalWordVal).'</h1>';
$companyAddress = '
<p style="font-size:6px; color:black;">Reiherstieg 40<br>
21244 Buchholz i.d.N. (bei Hamburg)</p>
';
$companyContact ='
<p style="font-size:6px; color:black;">
Tel. +49 (0) 4181 - 1386 456<br>
Fax. +49 (0) 4181 - 1386 457
</p>
';

$mail = '<p style="font-size:6px; color:black;">
Email. info@rimpido.com<br>
www.rimpido.com
</p>';

//$left_column = utf8_encode($left_column);
//$left_column = utf8_decode($left_column);
//$left_column_iso = iconv('utf-8','iso-8859-1',$left_column);

$y = $pdf->getY();

// set color for background
$pdf->SetFillColor(255, 255, 255);

// set color for text
$pdf->SetTextColor(245, 166, 47);   //
if($unNo == "NONE")
{
	$unNo = "";
}
else
{
	$unNo = "UN".$unNo;
}

if($reachNo == "NONE")
{
	$reachNo = "";
}
else
{
	$reachNo = "Reach No.".$reachNo;
}

if($ufiNo == "NONE")
{
	$ufiNo = "";
}
else
{
	$ufiNo = "UFI No.".$ufiNo;
}

$un_num = '<b style="color:black;font-size:31px;">'.htmlspecialchars($unNo).'</b>';
$reach_num = '<p style="color:black;font-size:11px;">'.htmlspecialchars($reachNo).'</p>';
$ufi_num = '<p style="color:black;font-size:11px;">'.htmlspecialchars($ufiNo).'</p>';
// write the first column



//$pdf->writeHTMLCell(35, '', 2, 11, $un_num, 0, 0, 1, true, 'J', true);
//$pdf->writeHTMLCell(40, '', 103, 70, $signalWord, 0, 0, 1, true, 'J', true);
$pdf->writeHTMLCell(35, '', 53, 11, $un_num, 0, 0, 1, true, 'J', true);
$pdf->writeHTMLCell(30, '', 175, 3, $companyAddress, 0, 0, 1, true, 'J', true);
$pdf->writeHTMLCell(25, '', 60, 3, $companyContact, 0, 0, 1, true, 'J', true);
$pdf->writeHTMLCell(35, '', 120, 3, $mail, 0, 0, 1, true, 'J', true);

$pdf->writeHTMLCell(57, '', 49, 135, $reach_num, 0, 0, 1, true, 'J', true);
$pdf->writeHTMLCell(57, '', 49, 140, $ufi_num, 0, 0, 1, true, 'J', true);

// set JPEG quality
$pdf->setJPEGQuality(100);

