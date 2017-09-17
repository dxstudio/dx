<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');
//require_once('tcpdf/tcpdf.php');
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('DXstudio');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// 设置页眉和页脚信息 
$pdf->SetHeaderData('', 30, 'DXstudio.cc', '点滴服务，心系师生',  
      array(0,64,255), array(0,64,128)); 
$pdf->setFooterData(array(0,64,0), array(0,64,128)); 
 
// 设置页眉和页脚字体 
$pdf->setHeaderFont(Array('stsongstdlight', '', '10')); 
$pdf->setFooterFont(Array('helvetica', '', '8')); 

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
  require_once(dirname(__FILE__).'/lang/eng.php');
  $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('stsongstdlight', '', 14, '', true);
// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));
//mysql
//session_start();
// $username=$_SESSION['username'];
$schoolid=$_GET['schoolid'];
$conn = new mysqli('localhost', 'root', 'dianxinstudio', 'dxstudio');

mysqli_query($conn , "set names utf8");
    $result1=mysqli_query($conn, "SELECT * FROM user_basic WHERE schoolid='{$schoolid}'");
    $row = mysqli_fetch_array($result1);

$id=$row['id'];
$name=$row['name'];
$sex=$row['sex'];
$nation = $row['nation'];
$academy=$row['academy'];
$grade=$row['grade'];
$major=$row['major'];
$class=$row['class'];
$schoolID=$row['schoolid'];
$class=$row['class'];
$phone=$row['phone'];
$mail=$row['mail'];
$qq=$row['qq'];
mysqli_close($conn);

$conn1 = new mysqli('localhost', 'root', 'dianxinstudio', 'dxstudio');

mysqli_query($conn1 , "set names utf8");
    $result1=mysqli_query($conn1, "SELECT * FROM user_resume WHERE schoolid='{$schoolid}'");
    $row1 = mysqli_fetch_array($result1);

$hobby=$row1['hobby'];
$skills_certificates=$row1['skills_certificates'];
$position=$row1['position'];
$deploy = $row1['deploy'];
$academic_field=$row1['academic_field'];
$project=$row1['project'];
$reasion=$row1['reasion'];
mysqli_close($conn1);

$html = <<<EOD
<head>
<style>

  table,h1{
    text-align:center;
    }

</style>
</head>
<body>
<h1 >点心网络文化工作室应聘表(ID:$id)</h1>
<table border="1" cellpadding="8">
  <tr>
    <th>姓名</th>
    <th>$name</th>
    <th>性别</th>
    <th>$sex</th>
    <th>民族</th>
    <th>$nation</th>
  </tr>
  <tr>
    <td>学院专业</td>
    <td colspan="5">{$academy}&nbsp;&nbsp;{$major}&nbsp;{$class}班</td>
  </tr>
  <tr>
    <td>学号</td>
    <td colspan="2">$schoolID</td>
    <td>爱好</td>
    <td colspan="2">$hobby</td>
  </tr>
   <tr>
    <td>邮箱</td>
    <td colspan="2">$mail</td>
    <td>技术特长</td>
    <td colspan="2">$skills_certificates</td>
  </tr>
   <tr>
    <td>QQ</td>
    <td colspan="2">$qq</td>
    <td>联系电话</td>
    <td colspan="2">$phone</td>
  </tr>
  <tr>
    <td>应聘职务</td>
    <td colspan="3">$position</td>
    <td colspan="2">$deploy</td>
  </tr>
  <tr>
    <td rowspan="4">&nbsp;<br>&nbsp;<br>自<br>我<br>简<br>介</td>
    <td rowspan="3" colspan="5" >
      $academic_field<br>
      $project<br>
      $reasion<br>
    </td>
  </tr>
  <tr>
    <td ></td>
  </tr>
   <tr>
    <td></td>
  </tr>
   <tr>
    <td colspan="5" style="text-align:left;">自由补充</td>
  </tr>

  <tr>
    <td colspan="3">录取意见1</td>
    <td colspan="3">录取意见2</td>
  </tr>
  <tr>
    <td colspan="3" rowspan="5"></td>
    <td colspan="3" rowspan="5"></td>
  </tr>
  <tr>
    <td></td>
  </tr>
   <tr>
    <td></td>
  </tr>
   <tr>
    <td></td>
  </tr>
   <tr>
    <td></td>
  </tr>
</table>
<h5>应聘须知：</h5>
<ol>
<li>面试时请自行打印并携带，面试时间地点敬请关注公众号，邮件，本站消息</li>
<li>预祝你面试成功</li>
</ol>
</body>
EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.

$pdf->Output("ResumeNO.".$id."-DXstudio.pdf", 'D');

//============================================================+
// END OF FILE
//============================================================+
