<?php
require_once('tcpdf.php'); 
//实例化 
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false); 
 
// 设置文档信息 
$pdf->SetCreator('Helloweba'); 
$pdf->SetAuthor('yueguangguang'); 
$pdf->SetTitle('Welcome to helloweba.com!'); 
$pdf->SetSubject('TCPDF Tutorial'); 
$pdf->SetKeywords('TCPDF, PDF, PHP'); 
 
// 设置页眉和页脚信息 
$pdf->SetHeaderData('', 30, 'Helloweba.com', '致力于WEB前端技术在中国的应用',  
      array(0,64,255), array(0,64,128)); 
$pdf->setFooterData(array(0,64,0), array(0,64,128)); 
 
// 设置页眉和页脚字体 
$pdf->setHeaderFont(Array('stsongstdlight', '', '10')); 
$pdf->setFooterFont(Array('helvetica', '', '8')); 
 
// 设置默认等宽字体 
$pdf->SetDefaultMonospacedFont('courier'); 
 
// 设置间距 
$pdf->SetMargins(15, 27, 15); 
$pdf->SetHeaderMargin(5); 
$pdf->SetFooterMargin(10); 
 
// 设置分页 
$pdf->SetAutoPageBreak(TRUE, 25); 
 
// set image scale factor 
$pdf->setImageScale(1.25); 
 
// set default font subsetting mode 
$pdf->setFontSubsetting(true); 
 
//设置字体 
$pdf->SetFont('stsongstdlight', '', 14); 
 
$pdf->AddPage(); 
 
$str1 = 'helloworld'; 
 
// $pdf->Write(0,$str1,'', 0, 'L', true, 0, false, false, 0); 
 $html = <<<EOD
<h1> $str1<a href="http://www.tcpdf.org" style="text-decoration:none;background-color:#CC0000;color:black;">&nbsp;<span style="color:black;">TC</span><span style="color:white;">PDF</span>&nbsp;</a>!</h1>
<i>This is the first example of TCPDF library.</i>
<p>This text is printed using the <i>writeHTMLCell()</i> method but you can also use: <i>Multicell(), writeHTML(), Write(), Cell() and Text()</i>.</p>
<p>Please check the source code documentation and other examples for further information.</p>
<p style="color:#CC0000;">TO IMPROVE AND EXPAND TCPDF I NEED YOUR SUPPORT, PLEASE <a href="http://sourceforge.net/donate/index.php?group_id=128076">MAKE A DONATION!</a></p>
EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
//输出PDF 
$pdf->Output('t.pdf', 'I'); 
?>