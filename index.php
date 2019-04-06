<?php
include('libs/fpdf.php');
include ('libs/exfpdf.php');
include('libs/easyTable.php');
 $pdf=new exFPDF('L','mm',array(915,508));
 $pdf->AddPage(); 
 $pdf->SetFont('helvetica','',10);
 $y=$pdf->GetY();
 $tdata=array(
 'Mark Range',
'80% or above',
'75% to less than 80%',
'70% to less than 75%',
'65% to less than 70%',
'60% to less than 65%',
'55% to less than 60%',
'50% to less than 55%',
'45% to less than 50%',
'40% to less than 45%',
'<40% (less than 40%)',
'',
'',
);

$greadest=array(
 'Letter  Grade',
'A+ (Plus)',
'A (Plain)',
'A- (Minus)',
'B+ (Plus)', 
'B (Plain)',
'B- (Minus)',
'C+ (Plus) ',
'C (Plain)',
'D (Plain)',
'F (Fail)',
'I',
'W',
);

$gpast=array(
'Grade Points',
'4.00',
'3.75',
'3.50',
'3.25',
'3.00',
'2.75',
'2.50',
'2.25',
'2.00',
'0.00',
'Incomplete',
'Withdrawn',

);
//$pdf->SetY($y);    // set the cursor at Y position 5
$pdf->SetXY(50, 10);
 $table1=new easyTable($pdf, '{70, 30, 30}','align:L{CCCR};border:1; border-color:#000000;');

 $table1->rowStyle('align:{CCCR};valign:M;bgcolor:#ffffff; font-color:#000000; font-family:times; font-size:14; font-style:B; paddingY:5;');
 $table1->easyCell('INSTRUCTIONS:','colspan:3');
 $table1->printRow();
 
 for($i=0; $i<13; $i++)
 {
   
    $table1->rowStyle('valign:M;border:LR;paddingY:2;border:1;border-color:#000000;');
    $table1->easyCell($tdata[$i]);
    $table1->easyCell($greadest[$i]);
    $table1->easyCell($gpast[$i]);
    $table1->printRow();
 }
 $table1->endTable(5);

//=================================Start Middle Text===================================
 	$duinfost=array(
 		'(Affiliated 7 College s)',												
            'Tabulation Sheet for 2nd Year B.A. Honours Examination of 2017',											
			'Examination held in June, 2018',											
			'Subject : Arabic',														
			'Total Credits: 24',															
					);													

//$pdf->SetY($y);   // set the cursor at Y position 5
 $pdf->SetXY(50, 5);
$write=new easyTable($pdf,'{40,120}', 'align:C{CCCR};font-family:times;');
 $write->easyCell('','img:logo.png, w20;align:R;');
 $write->easyCell('UNIVERSITY OF DHAKA','align:L;valign:M;font-size:26;paddingY:4;');
 $write->printRow();
for ($x=0; $x<5 ; $x++) { 
	$write->easyCell($duinfost[$x],'colspan:2;align:C;font-size:16;paddingY:3;');
    $write->printRow();
}
 
 $write->endTable(5);
//=================================Start Right Table===================================

$pdf->SetXY(50, 40);    // set the cursor at Y position 5
 //$pdf->SetY($y);
 $table2=new easyTable($pdf, '{30, 30, 30, 30, 30, 30, 30}','align:R{CCCR};border:1; border-color:#000000;');

 $table2->rowStyle('align:C{CCCR};valign:M;bgcolor:#ffffff; font-color:#000000; font-family:times; font-size:14; font-style:B; paddingY:5;');
 $table2->easyCell('STATISTICS OF THE RESULT:','colspan:7');
 $table2->printRow();

 $table2->rowStyle('align:C{CCCR};valign:M;paddingY:2;font-size:6;');
 $table2->easyCell('ENROLMENT','colspan:2');
 $table2->easyCell('PRESENT');
 $table2->easyCell('ABSENT','align:C;');
 $table2->easyCell('WITHHELD','align:C;');
 $table2->easyCell('PASSED','align:C;');
 $table2->easyCell('PERCENTAGE OF PASS','align:C;');
 $table2->printRow();
 
 $table2->rowStyle('align:C{CCCR};valign:M;paddingY:2;font-size:8;');
 $table2->easyCell('Male');
 $table2->easyCell('');
 $table2->easyCell('');
 $table2->easyCell('');
 $table2->easyCell('');
 $table2->easyCell('');
 $table2->easyCell('');
 $table2->printRow();
 
 $table2->rowStyle('align:C{CCCR};valign:M;paddingY:2;font-size:8;');
 $table2->easyCell('Female');
 $table2->easyCell('');
 $table2->easyCell('');
 $table2->easyCell('');
 $table2->easyCell('');
 $table2->easyCell('');
 $table2->easyCell('');
 $table2->printRow();
 
 $table2->rowStyle('align:C{CCCR};valign:M;paddingY:2;font-size:8;');
 $table2->easyCell('Total','align:C;');
 $table2->easyCell('29.00','align:C;');
 $table2->easyCell('29','align:C;');
 $table2->easyCell('0','align:C;');
 $table2->easyCell('0','align:C;');
 $table2->easyCell('29','align:C;');
 $table2->easyCell('100','align:C;');
 $table2->printRow();
 
 $table2->endTable(70);


 ///====================================Main Body==================================


 $table=new easyTable($pdf, '{22, 24, 24, 22, 22, 25, 30, 25, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 20, 20, 20, 20, 18}','align:C{CCCR};border:1; border-color:#a1a1a1;');

 $table->rowStyle('align:C{CCCR};valign:M;bgcolor:#ffffff; font-color:#000000; font-family:times; font-style:B;font-size:10;');
 $table->easyCell('College Code','rowspan:4;');
 $table->easyCell('NU Registration No.','rowspan:4;');
 $table->easyCell('DU Registration No.','rowspan:4;');
 $table->easyCell('Session','rowspan:4;');
 $table->easyCell('Exam. Roll No.','rowspan:4;');
 $table->easyCell('Name of Examinee','rowspan:4;');
 $table->easyCell('Appearing Paper','rowspan:4;');
 $table->easyCell('Regular/Irregular','rowspan:4;');
 $table->easyCell('Paper Code: 221201','colspan:5;align:C;valign:M;');
 $table->easyCell('Paper Code: 221203','colspan:5;align:C;valign:M;');
 $table->easyCell('Paper Code: 221205','colspan:5;align:C;valign:M;');
 $table->easyCell('Paper Code: 221207','colspan:5;align:C;valign:M;');
 $table->easyCell('Paper Code: 221209','colspan:5;align:C;valign:M;');
 $table->easyCell('Paper Code: 221909','colspan:5;align:C;valign:M;');
 $table->easyCell('Paper Code: 221109','colspan:3;align:C;valign:M;');
 $table->easyCell('Total Grade  Point Earned','rowspan:4;');
 $table->easyCell('GPA','rowspan:4;');
 $table->easyCell('Results','rowspan:4;');
 $table->easyCell('Exam. Roll','rowspan:4;');
 $table->easyCell('Remarks','rowspan:4;');
 $table->printRow();
 

 
 $table->rowStyle('align:{CCCC};');
 $table->easyCell('4 Credits','colspan:5;align:C;valign:M;');
 $table->easyCell('4 Credits','colspan:5;align:C;valign:M;');
 $table->easyCell('4 Credits','colspan:5;align:C;valign:M;');
 $table->easyCell('4 Credits','colspan:5;align:C;valign:M;');
 $table->easyCell('4 Credits','colspan:5;align:C;valign:M;');
 $table->easyCell('4 Credits','colspan:5;align:C;valign:M;');
 $table->easyCell('Non-Credits','colspan:3;align:C;valign:M;');
 $table->printRow();

 $table->rowStyle('align:{CCCC};');
 $table->easyCell('Classical Poetry','colspan:5;align:C;valign:M;');
 $table->easyCell('Communicative Arabic-2','colspan:5;align:C;valign:M;');
 $table->easyCell('Arabic Grammar (Nahu)','colspan:5;align:C;valign:M;');
 $table->easyCell('History of Arabic Literature(750-1258A.D) ','colspan:5;align:C;valign:M;');
 $table->easyCell('Islamic Ideology-2','colspan:5;align:C;valign:M;');
 $table->easyCell('Political Organization and Political System of UK and USA','colspan:5;align:C;valign:M;');
 $table->easyCell('English (Compulsory)','colspan:3;align:C;valign:M;');
 $table->printRow();

 $table->rowStyle('align:C{CCCC};valign:M;');
 $table->easyCell('Tutorial 20');
 $table->easyCell('Course Final 80');
 $table->easyCell('Total 100');
 $table->easyCell('Grade');
 $table->easyCell('Grade Point');
 $table->easyCell('Tutorial 20');
 $table->easyCell('Course Final 80');
 $table->easyCell('Total 100');
 $table->easyCell('Grade');
 $table->easyCell('Grade Point');
 $table->easyCell('Tutorial 20');
 $table->easyCell('Course Final 80');
 $table->easyCell('Total 100');
 $table->easyCell('Grade');
 $table->easyCell('Grade Point');
 $table->easyCell('Tutorial 20');
 $table->easyCell('Course Final 80');
 $table->easyCell('Total 100');
 $table->easyCell('Grade');
 $table->easyCell('Grade Point');
 $table->easyCell('Tutorial 20');
 $table->easyCell('Course Final 80');
 $table->easyCell('Total 100');
 $table->easyCell('Grade');
 $table->easyCell('Grade Point');
 $table->easyCell('Tutorial 20');
 $table->easyCell('Course Final 80');
 $table->easyCell('Total 100');
 $table->easyCell('Grade');
 $table->easyCell('Grade Point');
 $table->easyCell('Total 100');
 $table->easyCell('Grade');
 $table->easyCell('Grade Point');
 $table->printRow();

 $table->rowStyle('align:C{CCCC};valign:M;font-size:10;');
 $table->easyCell('6435');
 $table->easyCell('15212276141','align:C;font-size:10;');
 $table->easyCell('41612027719','align:C;font-size:10;');
 $table->easyCell('2015-16','align:C;font-size:10;');
 $table->easyCell('172010251','align:C;font-size:10;');
 $table->easyCell('MD. FOYSAL AHMAD','align:C;font-size:10;');
 $table->easyCell('221201 221203 221205 221207 221209 221909 221109','align:C;font-size:10;');
 $table->easyCell('REGULAR','align:C;font-size:10;');
 $table->easyCell('17','align:C;font-size:10;');
 $table->easyCell('58','align:C;font-size:10;');
 $table->easyCell('75','align:C;font-size:10;');
 $table->easyCell('A','align:C;font-size:10;');
 $table->easyCell('3.75','align:C;font-size:10;');
 $table->easyCell('15','align:C;font-size:10;');
 $table->easyCell('58','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('16','align:C;font-size:10;');
 $table->easyCell('67','align:C;font-size:10;');
 $table->easyCell('83','align:C;font-size:10;');
 $table->easyCell('A+','align:C;font-size:10;');
 $table->easyCell('4.00','align:C;font-size:10;');
 $table->easyCell('14','align:C;font-size:10;');
 $table->easyCell('59','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('14','align:C;font-size:10;');
 $table->easyCell('57','align:C;font-size:10;');
 $table->easyCell('71','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('13','align:C;font-size:10;');
 $table->easyCell('AB','align:C;font-size:10;');
 $table->easyCell('13','align:C;font-size:10;');
 $table->easyCell('F','align:C;font-size:10;');
 $table->easyCell('0.00','align:C;font-size:10;');
 $table->easyCell('36','align:C;font-size:10;');
 $table->easyCell('F','align:C;font-size:10;');
 $table->easyCell('0.00','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('3.04','align:C;font-size:10;');
 $table->easyCell('Promoted','align:C;font-size:10;');
 $table->easyCell('172010251','align:C;font-size:10;');
 $table->easyCell('');
 $table->printRow();

 $table->rowStyle('align:C{CCCC};valign:M;font-size:10;');
 $table->easyCell('6435');
 $table->easyCell('15212276141','align:C;font-size:10;');
 $table->easyCell('41612027719','align:C;font-size:10;');
 $table->easyCell('2015-16','align:C;font-size:10;');
 $table->easyCell('172010251','align:C;font-size:10;');
 $table->easyCell('MD. FOYSAL AHMAD','align:C;font-size:10;');
 $table->easyCell('221201 221203 221205 221207 221209 221909 221109','align:C;font-size:10;');
 $table->easyCell('REGULAR','align:C;font-size:10;');
 $table->easyCell('17','align:C;font-size:10;');
 $table->easyCell('58','align:C;font-size:10;');
 $table->easyCell('75','align:C;font-size:10;');
 $table->easyCell('A','align:C;font-size:10;');
 $table->easyCell('3.75','align:C;font-size:10;');
 $table->easyCell('15','align:C;font-size:10;');
 $table->easyCell('58','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('16','align:C;font-size:10;');
 $table->easyCell('67','align:C;font-size:10;');
 $table->easyCell('83','align:C;font-size:10;');
 $table->easyCell('A+','align:C;font-size:10;');
 $table->easyCell('4.00','align:C;font-size:10;');
 $table->easyCell('14','align:C;font-size:10;');
 $table->easyCell('59','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('14','align:C;font-size:10;');
 $table->easyCell('57','align:C;font-size:10;');
 $table->easyCell('71','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('13','align:C;font-size:10;');
 $table->easyCell('AB','align:C;font-size:10;');
 $table->easyCell('13','align:C;font-size:10;');
 $table->easyCell('F','align:C;font-size:10;');
 $table->easyCell('0.00','align:C;font-size:10;');
 $table->easyCell('36','align:C;font-size:10;');
 $table->easyCell('F','align:C;font-size:10;');
 $table->easyCell('0.00','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('3.04','align:C;font-size:10;');
 $table->easyCell('Promoted','align:C;font-size:10;');
 $table->easyCell('172010251','align:C;font-size:10;');
 $table->easyCell('');
 $table->printRow();

 $table->rowStyle('align:C{CCCC};valign:M;font-size:10;');
 $table->easyCell('6435');
 $table->easyCell('15212276141','align:C;font-size:10;');
 $table->easyCell('41612027719','align:C;font-size:10;');
 $table->easyCell('2015-16','align:C;font-size:10;');
 $table->easyCell('172010251','align:C;font-size:10;');
 $table->easyCell('MD. FOYSAL AHMAD','align:C;font-size:10;');
 $table->easyCell('221201 221203 221205 221207 221209 221909 221109','align:C;font-size:10;');
 $table->easyCell('REGULAR','align:C;font-size:10;');
 $table->easyCell('17','align:C;font-size:10;');
 $table->easyCell('58','align:C;font-size:10;');
 $table->easyCell('75','align:C;font-size:10;');
 $table->easyCell('A','align:C;font-size:10;');
 $table->easyCell('3.75','align:C;font-size:10;');
 $table->easyCell('15','align:C;font-size:10;');
 $table->easyCell('58','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('16','align:C;font-size:10;');
 $table->easyCell('67','align:C;font-size:10;');
 $table->easyCell('83','align:C;font-size:10;');
 $table->easyCell('A+','align:C;font-size:10;');
 $table->easyCell('4.00','align:C;font-size:10;');
 $table->easyCell('14','align:C;font-size:10;');
 $table->easyCell('59','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('14','align:C;font-size:10;');
 $table->easyCell('57','align:C;font-size:10;');
 $table->easyCell('71','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('13','align:C;font-size:10;');
 $table->easyCell('AB','align:C;font-size:10;');
 $table->easyCell('13','align:C;font-size:10;');
 $table->easyCell('F','align:C;font-size:10;');
 $table->easyCell('0.00','align:C;font-size:10;');
 $table->easyCell('36','align:C;font-size:10;');
 $table->easyCell('F','align:C;font-size:10;');
 $table->easyCell('0.00','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('3.04','align:C;font-size:10;');
 $table->easyCell('Promoted','align:C;font-size:10;');
 $table->easyCell('172010251','align:C;font-size:10;');
 $table->easyCell('');
 $table->printRow();

 $table->rowStyle('align:C{CCCC};valign:M;font-size:10;');
 $table->easyCell('6435');
 $table->easyCell('15212276141','align:C;font-size:10;');
 $table->easyCell('41612027719','align:C;font-size:10;');
 $table->easyCell('2015-16','align:C;font-size:10;');
 $table->easyCell('172010251','align:C;font-size:10;');
 $table->easyCell('MD. FOYSAL AHMAD','align:C;font-size:10;');
 $table->easyCell('221201 221203 221205 221207 221209 221909 221109','align:C;font-size:10;');
 $table->easyCell('REGULAR','align:C;font-size:10;');
 $table->easyCell('17','align:C;font-size:10;');
 $table->easyCell('58','align:C;font-size:10;');
 $table->easyCell('75','align:C;font-size:10;');
 $table->easyCell('A','align:C;font-size:10;');
 $table->easyCell('3.75','align:C;font-size:10;');
 $table->easyCell('15','align:C;font-size:10;');
 $table->easyCell('58','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('16','align:C;font-size:10;');
 $table->easyCell('67','align:C;font-size:10;');
 $table->easyCell('83','align:C;font-size:10;');
 $table->easyCell('A+','align:C;font-size:10;');
 $table->easyCell('4.00','align:C;font-size:10;');
 $table->easyCell('14','align:C;font-size:10;');
 $table->easyCell('59','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('14','align:C;font-size:10;');
 $table->easyCell('57','align:C;font-size:10;');
 $table->easyCell('71','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('13','align:C;font-size:10;');
 $table->easyCell('AB','align:C;font-size:10;');
 $table->easyCell('13','align:C;font-size:10;');
 $table->easyCell('F','align:C;font-size:10;');
 $table->easyCell('0.00','align:C;font-size:10;');
 $table->easyCell('36','align:C;font-size:10;');
 $table->easyCell('F','align:C;font-size:10;');
 $table->easyCell('0.00','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('3.04','align:C;font-size:10;');
 $table->easyCell('Promoted','align:C;font-size:10;');
 $table->easyCell('172010251','align:C;font-size:10;');
 $table->easyCell('');
 $table->printRow();

 $table->rowStyle('align:C{CCCC};valign:M;font-size:10;');
 $table->easyCell('6435');
 $table->easyCell('15212276141','align:C;font-size:10;');
 $table->easyCell('41612027719','align:C;font-size:10;');
 $table->easyCell('2015-16','align:C;font-size:10;');
 $table->easyCell('172010251','align:C;font-size:10;');
 $table->easyCell('MD. FOYSAL AHMAD','align:C;font-size:10;');
 $table->easyCell('221201 221203 221205 221207 221209 221909 221109','align:C;font-size:10;');
 $table->easyCell('REGULAR','align:C;font-size:10;');
 $table->easyCell('17','align:C;font-size:10;');
 $table->easyCell('58','align:C;font-size:10;');
 $table->easyCell('75','align:C;font-size:10;');
 $table->easyCell('A','align:C;font-size:10;');
 $table->easyCell('3.75','align:C;font-size:10;');
 $table->easyCell('15','align:C;font-size:10;');
 $table->easyCell('58','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('16','align:C;font-size:10;');
 $table->easyCell('67','align:C;font-size:10;');
 $table->easyCell('83','align:C;font-size:10;');
 $table->easyCell('A+','align:C;font-size:10;');
 $table->easyCell('4.00','align:C;font-size:10;');
 $table->easyCell('14','align:C;font-size:10;');
 $table->easyCell('59','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('14','align:C;font-size:10;');
 $table->easyCell('57','align:C;font-size:10;');
 $table->easyCell('71','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('13','align:C;font-size:10;');
 $table->easyCell('AB','align:C;font-size:10;');
 $table->easyCell('13','align:C;font-size:10;');
 $table->easyCell('F','align:C;font-size:10;');
 $table->easyCell('0.00','align:C;font-size:10;');
 $table->easyCell('36','align:C;font-size:10;');
 $table->easyCell('F','align:C;font-size:10;');
 $table->easyCell('0.00','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('3.04','align:C;font-size:10;');
 $table->easyCell('Promoted','align:C;font-size:10;');
 $table->easyCell('172010251','align:C;font-size:10;');
 $table->easyCell('');
 $table->printRow();

 $table->rowStyle('align:C{CCCC};valign:M;font-size:10;');
 $table->easyCell('6435');
 $table->easyCell('15212276141','align:C;font-size:10;');
 $table->easyCell('41612027719','align:C;font-size:10;');
 $table->easyCell('2015-16','align:C;font-size:10;');
 $table->easyCell('172010251','align:C;font-size:10;');
 $table->easyCell('MD. FOYSAL AHMAD','align:C;font-size:10;');
 $table->easyCell('221201 221203 221205 221207 221209 221909 221109','align:C;font-size:10;');
 $table->easyCell('REGULAR','align:C;font-size:10;');
 $table->easyCell('17','align:C;font-size:10;');
 $table->easyCell('58','align:C;font-size:10;');
 $table->easyCell('75','align:C;font-size:10;');
 $table->easyCell('A','align:C;font-size:10;');
 $table->easyCell('3.75','align:C;font-size:10;');
 $table->easyCell('15','align:C;font-size:10;');
 $table->easyCell('58','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('16','align:C;font-size:10;');
 $table->easyCell('67','align:C;font-size:10;');
 $table->easyCell('83','align:C;font-size:10;');
 $table->easyCell('A+','align:C;font-size:10;');
 $table->easyCell('4.00','align:C;font-size:10;');
 $table->easyCell('14','align:C;font-size:10;');
 $table->easyCell('59','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('14','align:C;font-size:10;');
 $table->easyCell('57','align:C;font-size:10;');
 $table->easyCell('71','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('13','align:C;font-size:10;');
 $table->easyCell('AB','align:C;font-size:10;');
 $table->easyCell('13','align:C;font-size:10;');
 $table->easyCell('F','align:C;font-size:10;');
 $table->easyCell('0.00','align:C;font-size:10;');
 $table->easyCell('36','align:C;font-size:10;');
 $table->easyCell('F','align:C;font-size:10;');
 $table->easyCell('0.00','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('3.04','align:C;font-size:10;');
 $table->easyCell('Promoted','align:C;font-size:10;');
 $table->easyCell('172010251','align:C;font-size:10;');
 $table->easyCell('');
 $table->printRow();

 $table->rowStyle('align:C{CCCC};valign:M;font-size:10;');
 $table->easyCell('6435');
 $table->easyCell('15212276141','align:C;font-size:10;');
 $table->easyCell('41612027719','align:C;font-size:10;');
 $table->easyCell('2015-16','align:C;font-size:10;');
 $table->easyCell('172010251','align:C;font-size:10;');
 $table->easyCell('MD. FOYSAL AHMAD','align:C;font-size:10;');
 $table->easyCell('221201 221203 221205 221207 221209 221909 221109','align:C;font-size:10;');
 $table->easyCell('REGULAR','align:C;font-size:10;');
 $table->easyCell('17','align:C;font-size:10;');
 $table->easyCell('58','align:C;font-size:10;');
 $table->easyCell('75','align:C;font-size:10;');
 $table->easyCell('A','align:C;font-size:10;');
 $table->easyCell('3.75','align:C;font-size:10;');
 $table->easyCell('15','align:C;font-size:10;');
 $table->easyCell('58','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('16','align:C;font-size:10;');
 $table->easyCell('67','align:C;font-size:10;');
 $table->easyCell('83','align:C;font-size:10;');
 $table->easyCell('A+','align:C;font-size:10;');
 $table->easyCell('4.00','align:C;font-size:10;');
 $table->easyCell('14','align:C;font-size:10;');
 $table->easyCell('59','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('14','align:C;font-size:10;');
 $table->easyCell('57','align:C;font-size:10;');
 $table->easyCell('71','align:C;font-size:10;');
 $table->easyCell('A-','align:C;font-size:10;');
 $table->easyCell('3.50','align:C;font-size:10;');
 $table->easyCell('13','align:C;font-size:10;');
 $table->easyCell('AB','align:C;font-size:10;');
 $table->easyCell('13','align:C;font-size:10;');
 $table->easyCell('F','align:C;font-size:10;');
 $table->easyCell('0.00','align:C;font-size:10;');
 $table->easyCell('36','align:C;font-size:10;');
 $table->easyCell('F','align:C;font-size:10;');
 $table->easyCell('0.00','align:C;font-size:10;');
 $table->easyCell('73','align:C;font-size:10;');
 $table->easyCell('3.04','align:C;font-size:10;');
 $table->easyCell('Promoted','align:C;font-size:10;');
 $table->easyCell('172010251','align:C;font-size:10;');
 $table->easyCell('');
 $table->printRow();

 $table->endTable(5);

 ///=====================================End Body===================================
 ///======================================Footer Start==============================

  													

 //$pdf->SetY($y);   // set the cursor at Y position 5
 $pdf->SetXY(20, 455);
 $footertbl=new easyTable($pdf,'{40,100}', 'align:L{CCCR};font-family:times;');
 $footertbl->easyCell('Full Name of (','align:R;valign:M;font-size:10;paddingY:2;');
 $footertbl->easyCell('1. Dr. Muhammad Ruhul Amin .....................','align:L;font-size:10;paddingY:2;');
 $footertbl->printRow();
 
 $footertbl->easyCell('Tabulators {','align:R;valign:M;font-size:10;paddingY:2;');
 $footertbl->easyCell('2. Mohammad Al-Mamun ........................','align:L;font-size:10;paddingY:2;');
 $footertbl->printRow();

 $footertbl->easyCell('(','align:R;valign:M;font-size:10;paddingY:2;');
 $footertbl->easyCell('Dated, the ........................','align:L;font-size:10;paddingY:2;');
 $footertbl->printRow();
 
 $footertbl->endTable(5);
 
 $pdf->SetXY(50, 455);
 $footertbl1=new easyTable($pdf,'{60,150,100}', 'align:C{CCCR};font-family:times;');
 $footertbl1->easyCell('Name and Signature of Chairman and Members of the Examination Committee ','rowspan:4;align:L;valign:M;font-size:10;paddingY:5;valign:M;font-weight:B;');
 $footertbl1->easyCell(' 1.Full Name: Dr. Muhammad Ruhul Amin .....................Chairman','align:L;font-size:10;paddingY:2;');
 $footertbl1->easyCell(' 1.Signature .................... ','align:C;font-size:10;paddingY:2;');
 $footertbl1->printRow();
 
 $footertbl1->easyCell(' 2.Full Name: Dr. Abdullah Al Maruf .....................Member','align:L;font-size:10;paddingY:2;');
 $footertbl1->easyCell(' 2.Signature .................... ','align:C;font-size:10;paddingY:2;');
 $footertbl1->printRow();
 
 $footertbl1->easyCell(' 3.Full Name: Md. Redwan Akand .....................Member ','align:L;font-size:10;paddingY:2;');
 $footertbl1->easyCell(' 3.Signature .................... ','align:C;font-size:10;paddingY:2;');
 $footertbl1->printRow();
 
 $footertbl1->easyCell(' 4.Full Name: Mohammad Al-Mamun .....................Member','align:L;font-size:10;paddingY:2;');
 $footertbl1->easyCell(' 4.Sig0ature .................... ','align:C;font-size:10;paddingY:2;');
 $footertbl1->printRow();

 $footertbl1->endTable(5);

 $pdf->SetXY(20, 455);
 $footertbl2 = new easyTable($pdf,'{70,100,70}','align:R{CCCR};font-family:times;font-size:10;');
 $footertbl2->easyCell('Controller of Examinations');
 $footertbl2->easyCell('');
 $footertbl2->easyCell('.........................');
 $footertbl2->printRow();

 $footertbl2->easyCell('University of Dhaka');
 $footertbl2->easyCell('');
 $footertbl2->easyCell('Pro-Vice Chancellor');
 $footertbl2->printRow();

 $footertbl2->easyCell('Dated, the .............');
 $footertbl2->easyCell('');
 $footertbl2->easyCell('Dated, the .............');
 $footertbl2->printRow();

 $footertbl2->endTable(5);

 ///=======================================End Footer===============================
 $pdf->Output(); 

?>
