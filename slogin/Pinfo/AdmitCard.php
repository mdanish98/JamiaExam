<?php
session_start();
include('connection/connectionsql.php');
$enroll = $_SESSION['enroll'];
if(!isset($enroll))
	{
	header("location:../Studentlog.php?z=1");
	exit();
	}
	
	//form filled check starts
	$enrollcat = $_POST['admit'];
	if(empty($enrollcat))
	{
		header("Location: HomePage.php?q=2");
		exit();
	}
	
$sqlquery = "SELECT FormApproved,FormFilled FROM registeration where EnrollCat='$enrollcat'";
$runsql = mysql_query($sqlquery);
$rowcount = mysql_num_rows($runsql);
$rowsql = mysql_fetch_array($runsql);
$formapproved = $rowsql['FormApproved'];
$formfilled = $rowsql['FormFilled'];
if($rowcount>0)
{
if($formapproved==0)
{
	header("Location: HomePage.php?q=1");
	exit();
}
}
else
{
	header("Location: Registration.php?q=4");
	exit();
}

//form filled check ends


//check for login start

//check for login end
$query = "SELECT `registeration`.`StudentID`,`registeration`.`Enrollment`,`registeration`.`Name`,`registeration`.`DOB`,`registeration`.`AcadSess`,`registeration`.`CAT`,`registeration`.`Course`,`registeration`.`Session`,`registeration`.`sub1`,`registeration`.`sub2`,`registeration`.`sub3`,`registeration`.`sub4`,`registeration`.`sub5`,`registeration`.`sub6`,`registeration`.`sub7`,`registeration`.`sub8`,`registeration`.`sub9`,`registeration`.`sub10`,`registeration`.`sub11`,`registeration`.`sub12`,`registeration`.`sub13`,`registeration`.`sub14`,`registeration`.`sub15`,`registeration`.`sub16`,`registeration`.`FormFilled`,`registeration`.`FormApproved`,`registeration`.`PaperCount`,`registeration`.`ProfilePic`,`registeration`.`Signature`,`registeration`.`FilledOn`,`registeration`.`FatherName`,`registeration`.`ClassName`,`registeration`.`Add1`,`registeration`.`Add2`,`registeration`.`Add3`,`registeration`.`City`,`registeration`.`State`,`registeration`.`PIN`,`registeration`.`Mobile`,`registeration`.`Roll` FROM `mylocation`.`registeration` WHERE EnrollCat='$enrollcat';";
$run = mysql_query($query);
while($row = mysql_fetch_array($run))
{
	$stid = $row['StudentID'];
	$enrollment = $row['Enrollment'];
	$name = $row['Name'];
	$dob = $row['DOB'];
	$cat = $row['CAT'];
	$course = $row['Course'];
	$session = $row['Session'];
	for($i=1;$i<=16;$i++)
	{
		$sub[$i] = $row['sub'.$i];
	}
	
	$papercount = $row['PaperCount'];
	$profilepic = $row['ProfilePic'];
	$signature = $row['Signature'];
	$fathername = $row['FatherName'];
	$classname = $row['ClassName'];
	$add1 = $row['Add1'];
	$add2 = $row['Add2'];
	$add3 = $row['Add3'];
	$city = $row['City'];
	$state = $row['State'];
	$pin = $row['PIN'];
	$mobile = $row['Mobile'];
	$roll = $row['Roll'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	Admit Card
</title>
<link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon" />

    <style type="text/css">
        .FontStyle
        {
            font-family: Arial;
            font-size: 12pt;
            font-weight: bold;
        }
        
        
        p.MsoNormal
        {
            margin-bottom: .0001pt;
            font-size: 12.0pt;
            font-family: "Times New Roman" , "serif";
            margin-left: 0in;
            margin-right: 0in;
            margin-top: 0in;
        }
        .style19
        {
            border-collapse: collapse;
            font-size: 11.0pt;
            font-family: Tahoma;
            margin-left: 8pt;
            width: 97%;
        }
        .style31
        {
            width: 102%;
        }
        .style52
        {
            width: 29%;
        }
        .style56
        {
            text-align: center;
        }
        .style57
        {
            height: 60px;
        }
        .style59
        {
            width: 138px;
        }
        .style60
        {
            width: 8%;
        }
        .style61
        {
            width: 29%;
            height: 80px;
        }
        .style62
        {
            height: 80px;
            width: 138px;
        }
        </style>
</head>
<body>
    
    <div style="width: 730px; font-family: Arial;">
        <center>
            <input type="button" value="Print Admit Card" onclick="window.print()" />
            <input type="button" name="Buttonback" value="Close" id="Buttonback" onclick="window.close()" style="font-weight:normal;" />
        </center>
    </div>
    <div style="width: 730px; height:1048px; border-style: solid; font-family: Arial;">
        <div>
            <table border="2" cellpadding="0" cellspacing="0" class="style19">
            
                <tr>
                    <td colspan="3" width="100%">
                        <table width="100%">
                            <tr>
                            <td style="width: 15%" align="center" valign="middle" >
                                <img id="Image1" src="../Images/JMIAdmitLogo.jpg" />
            
            </td>
                                <td align="center" style="color: #000000; font-family: Tahoma;">
                                    <span id="Label1" style="font-family:Calibri;font-size:16px;font-weight:bold;">ADMIT CARD</span>
                                    <br />
                                    <span id="Label1" style="font-family:Calibri;font-size:16px;font-weight:bold;">JAMIA MILLIA ISLAMIA</span>
                                    <br />
                                    <span id="Label2" style="font-family:Calibri;font-size:14px;font-weight:normal;">(A Central University by an act of Parliament)</span>
                                    <br /><br />
                                    <span id="Label5" style="font-family:Calibri;font-size:16px;font-weight:bold;">ANNUAL/SEMESTER EXAMS 2015-16</span>
                                    <br />
                                    
                                    
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
            </table>
        </div>
        <div>
            <table border="0" cellpadding="0" cellspacing="0" class="style19">
                <tr style="page-break-inside: avoid">
                    <td colspan="6" 
                        style="border: solid black 1.0pt; padding: 0in 5.4pt 0in 5.4pt;font-family: calibri; font-size: medium;" 
                        valign="top" class="style56">
                        
                        <span id="lblExamDate" style="font-weight: 700"></span>
                        &nbsp;<span id="lblShiftTime" style="font-weight: 700"> </span>
                    </td>
                </tr>
                <tr>
                    
                    <td rowspan="10" style="border-left: 1.0pt solid black; border-right: 1.0pt solid black;
                        border-bottom:; padding: 0in 5.4pt; border-top-color: inherit; border-style: none solid solid solid; border-width: medium 1.0pt 1.0px 1.0pt; border-right-color: black; border-bottom-color: black; border-left-color: black;" valign="top" align="center" class="style60" >
                        <img id="ImgPhoto" src="<?php echo $profilepic; ?>" style="border-width:1px;border-style:Solid;height:133px;width:115px;margin-top: 8px" /><br /><br />
                            <img id="ImgSign" class="style27" src="<?php echo $signature; ?>" style="border-style:None;height:45px;width:115px;" /><br/>
                            <span style="color: #999; font-size: 7pt;" 
                        valign="bottom" align="center" class="style57">
                        (Signature of the Candidate)
                        </span>    
                    </td>
                    
                    <td style="border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-bottom: solid black 1.0pt;
                        padding: 0in 5.4pt 0in 5.4pt; font-family: calibri; font-size: 11pt; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium;" 
                        valign="top" class="style52" >
                       <b> Name of candidate</b></td>
                    <td style="border-left: solid black 1.0pt; border-right: solid black 2.0pt; border-bottom: solid black 1.0pt; padding: 0in 5.4pt 0in 5.4pt; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium;font-family: calibri; font-size: 11pt;" valign="top" colspan="3" class="style59">
                        <span id="lblName" style="font-weight: 700"><?php echo $name; ?></span>
                    </td>
                    
                    
                    
                </tr>
                
                
                <tr style="page-break-inside: avoid">
                    <td 
                        style="border-left: solid black 1.0pt; border-bottom: solid black 1.0pt;
                        padding: 0in 5.4pt 0in 5.4pt;font-family: calibri; font-size: 11pt; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium;" 
                        valign="top" class="style52" >
                        Father's Name</td>
                    <td style="border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; padding: 0in 5.4pt 0in 5.4pt;
                        border-right-style: none; border-right-color: inherit; border-right-width: medium;
                        border-top-style: none; border-top-color: inherit; border-top-width: medium; font-family: calibri; font-size: 11pt;"
                        valign="top" colspan="3" class="style59">
                        <span id="lblFatherHusband"><?php echo $fathername; ?></span>
                    </td>
                </tr>
                
                
                <tr style="page-break-inside: avoid">
                    <td 
                        style="border-left: solid black 1.0pt; border-bottom: solid black 1.0pt;
                        padding: 0in 5.4pt 0in 5.4pt;font-family: calibri; font-size: 11pt; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium;" 
                        valign="top" class="style52" >
                        Mode</td>
                    <td style="border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; padding: 0in 5.4pt 0in 5.4pt;
                        border-right-style: none; border-right-color: inherit; border-right-width: medium;
                        border-top-style: none; border-top-color: inherit; border-top-width: medium; font-family: calibri; font-size: 11pt;"
                        valign="top" colspan="3" class="style59">
                        <span id="lblFatherHusband">English</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <b>Category:</b>  &emsp; <?php 
						if($cat==1)
{
echo "Regular"; 
}
else if($cat==2)
{
	echo "Ex-Regular";
}
else if($cat==3)
{
	echo "CR/DI";
}
else if($cat==4)
{
	echo "Compartment";
}
 ?>
                    </td>
                    
                </tr>
                
                
                <tr style="page-break-inside: avoid">
                    <td 
                        style="border-left: solid black 1.0pt; border-bottom: solid black 1.0pt;
                        padding: 0in 5.4pt 0in 5.4pt;font-family: calibri; font-size: 11pt; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium;" 
                        valign="top" class="style52" >
                        Examination</td>
                    <td style="border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; padding: 0in 5.4pt 0in 5.4pt;
                        border-right-style: none; border-right-color: inherit; border-right-width: medium;
                        border-top-style: none; border-top-color: inherit; border-top-width: medium; font-family: calibri; font-size: 11pt;"
                        valign="top" colspan="3" class="style59">
                        <span id="lblFatherHusband"><?php echo $classname;  ?></span>
                    </td>
                </tr>
                
                
                <tr style="page-break-inside: avoid">
                    <td style="border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; padding: 0in 5.4pt 0in 5.4pt;
                        border-right-style: none; border-right-color: inherit; border-right-width: medium;
                        border-top-style: none; border-top-color: inherit; border-top-width: medium;font-family: calibri; font-size: 11pt;"
                        valign="top" class="style61" >
                        Address</td>
                    <td style="border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; padding: 0in 5.4pt 0in 5.4pt;
                        border-right-style: none; border-right-color: inherit; border-right-width: medium;
                        border-top-style: none; border-top-color: inherit; border-top-width: medium;font-family: calibri; font-size: 11pt;"
                        valign="top" colspan="3" class="style62">
                        <span id="lblCandidateDetails"><?php echo $add1." ".$add2." ".$add3." ".$city." ".$state." ".$pin;  ?></span>
                    </td>
                </tr>

                <tr style="page-break-inside: avoid">
                    <td 
                        style="border-left: solid black 1.0pt; border-bottom: solid black 1.0pt;
                        padding: 0in 5.4pt 0in 5.4pt; font-family: calibri; font-size: 11pt; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium;" 
                        valign="top" class="style52">
                        Telephone/Mobile No.</td>
                     <td style="border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; padding: 0in 5.4pt 0in 5.4pt;
                        border-right-style: none; border-right-color: inherit; border-right-width: medium;
                        border-top-style: none; border-top-color: inherit; border-top-width: medium;font-family: calibri; font-size: 11pt;"
                        valign="top" colspan="3" class="style59">
                        <span id="lblRegNo"><?php echo $mobile;  ?></span>
                    </td>
             
                </tr>

          <tr style="page-break-inside: avoid">
                    <td 
                        style="border-left: solid black 1.0pt; border-bottom: solid black 1.0pt;
                        padding: 0in 5.4pt 0in 5.4pt; font-family: calibri; font-size: 11pt; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium;" 
                        valign="top" class="style52">
                       Roll No.</td>
                     <td style="border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; padding: 0in 5.4pt 0in 5.4pt;
                        border-right-style: none; border-right-color: inherit; border-right-width: medium;
                        border-top-style: none; border-top-color: inherit; border-top-width: medium;font-family: calibri; font-size: 11pt;"
                        valign="top" colspan="3" class="style59">
                        <span id="lblSubject"><?php echo $roll;  ?></span>
                    </td>
             
                </tr>

<tr style="page-break-inside: avoid">
                    <td 
                        style="border-left: solid black 1.0pt; border-bottom: solid black 1.0pt;
                        padding: 0in 5.4pt 0in 5.4pt; font-family: calibri; font-size: 11pt; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium;" 
                        valign="top" class="style52">
                      Enrollment No.</td>
                     <td style="border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; padding: 0in 5.4pt 0in 5.4pt;
                        border-right-style: none; border-right-color: inherit; border-right-width: medium;
                        border-top-style: none; border-top-color: inherit; border-top-width: medium;font-family: calibri; font-size: 11pt;"
                        valign="top" colspan="3" class="style59">
                        <span id="lblCoursecategory"><?php echo $enroll;  ?></span>
                    </td>
             
                </tr>

                



<tr style="page-break-inside: avoid">
                    <td colspan="4"
                        style="border-left: solid black 1.0pt; border-bottom: solid black 1.0pt;
                        padding: 0in 5.4pt 0in 5.4pt; font-family: calibri; font-size: 11pt; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium;" 
                        valign="top" class="style52">
                       <b> All subjects/papers in which the candidate wishes to appear:</b>
                    </td>
                     
                    </td>
             
                </tr>





               <tr style="page-break-inside: avoid">
                    <td colspan="6"
                        style="border-left: solid black 1.0pt; border-bottom: solid black 1.0pt;
                        padding: 0in 5.4pt 0in 5.4pt; font-family: calibri; font-size: 11pt; border-right-style: none; border-right-color: inherit; border-right-width: medium; border-top-style: none; border-top-color: inherit; border-top-width: medium;" 
                        valign="top" class="style52">
                                                
                        <table style="border-style:ridge;" width="550">
                        <tr>
                        <th>
                        Sl. No.
                        </th>
                        <th>
                        Name & Code of Paper
                        </th>
                        </tr>
                        <?php
						 
for($p=1;$p<=$papercount;$p++)
{
?>
<tr>

<td align="center" style=" border-style:ridge;">
<span style="font-size:12px; color:#000;">
<?php echo $p; ?>
</span>
</td>
<td align="center" style=" border-style:ridge;">

<span style="font-size:14px; color:#000;">
<?php echo $sub[$p]; ?>
</span>
</td>
</tr>	


<?php
}
?>
                        
                        </table>
                        
                        
                        </td>
                    
                </tr>
          
          <tr>
                    <td  colspan="4" style="border-left: 1.0pt solid black; border-right: 1.0pt solid black;
                        border-bottom: 1.0pt solid black; padding: 0in 5.4pt; border-top-style: none;
                        border-top-color: inherit; border-top-width: medium; color: #999; font-size: 9pt;" 
                        valign="bottom" align="center" class="style57"
                        >(Dean/Principal/Director)
                    </td>


                      <td  colspan="4" style="border-left: 1.0pt solid black; border-right: 1.0pt solid black;
                        border-bottom: 1.0pt solid black; padding: 0in 5.4pt; border-top-style: none;
                        border-top-color: inherit; border-top-width: medium; color: #999; font-size: 9pt;" 
                        valign="bottom" align="center" class="style57"
                        >
                        
                        <img id="ImgSign" class="style27" src="<?php  echo $signature; ?>" style="border-style:None;height:45px;width:115px;" />
                        <br/>
                        (Specimen signature of the candidate)
                    </td>
                </tr>
                <tr class="style19">
                    
                    
                    
                </tr>
            </table>
        </div>
        <div>
        
        </div></div></div>
        
        
            <div style="width: 730px; height:auto; border-style: solid; font-family: Arial;">
        <div>

            <table>
                <tr>
                    <td colspan="3" style="font-family: Tahoma; color: #000000;" align="left" class="style31">
                        <span id="Label11" style="font-family:Calibri;font-size:12px;font-weight:bold;text-decoration: underline">INSTRUCTIONS TO CANDIDATES FOR EXAMINATION</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="font-size: 9px; text-align: justify; border-style:ridge;" class="style31">
                        <table style="font-family: calibri; font-size: 8pt; border-style:ridge;">
                        <tr>
                        <td style="border-style:ridge; font-size:9px;">
                        
                        30.1    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           The doors of the Examination Hall shall be opened half an hour before the
commencement of the Examination on the first day and quarter of an hour before
on subsequent days. 
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                        
                        31.4    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           
                           Any candidate, detected cheating or making use of any dishonest or unfair
means in connection with an Examination shall be reported to the Controller of
Examinations by the Superintendent of Examinations or through him by an
lnvigilator or an Official of the University, as the case may be. The Controller
of Examinations shall place the aforesaid matter before the Examination
Committee for consideration, which may if satisfied that the facts alleged are
true and disclose premeditation on the part of the candidate, disqualify the
candidate from passing that Examination and debar him/her from appearing at
any University Examination for a period not exceeding three years.
                           
                             
                           </td> 
                        </tr>    
                            
                            <tr>
                        <td style="border-style:ridge; font-size:9px;">


                        
                        30.2    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           A candidate may not be admitted into the Examination hall, if he/she fails to
present to the invigilator his/her Admission Card and/or satisfy the
Superintendent of Examinations that it will be produced within a reasonable time.  
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                        
                        31.5    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           
                           Any candidate detected using unfair means in an Examination Hall shall be
reported to the Controller of Examinations by the Superintendent of
Examinations or through him by an Invigilator or by an Official of the
University, as the case may be. The Controller of Examinations shall place the
aforesaid matter before the Examination Committee for consideration, which
may, if satisfied that the facts alleged are true but do not disclose any
premeditation, disqualify the candidate from passing that Exmnination and
debar him her from appearing at any University Examination for a period not
exceeding two years.
                           
                             
                           </td> 
                        </tr>
                        
                        <tr>
                        <td style="border-style:ridge; font-size:9px;">


                        
                        30.3    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           All candidates shall come to the Examination Hall before the time fixed for the
Examination. If a candidate arrives not later than 30 minutes after the time fixed
for the Examination, the Invigilator may allow him/her to appear at the
Examination with the permission of Superintendent of Examinations. No
candidate shall be allowed to appear in the examinations after 30 minutes of
commencement of the examinations.  
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                        
                        31.6    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           
                           Any candidate bringing any book, paper, notes or other material to the
Examination Hall shall be reported to the Examination Committee for
consideration by the Controller of Examinations, as reported by, the
Superintendent of Examinations or through him by an invigilator or by an
Official of the University, as the case may be, and the Examination Committee
may, if satisfied that the facts alleged are true but that the candidate has not
made and use thereof, disqualify the candidate from passing that Examination.
                           
                              
                           </td> 
                        </tr>
                        <tr>
                        <td style="border-style:ridge; font-size:9px;">


                        
                        30.4    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           The candidates shall strictly obey and follow all the instructions given to them
from time to time by the Superintendent of Examinations or Invigilators or any
Official of the University connected with the Examinations.  
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                        
                        31.7    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           
                           Any candidate, who in the opinion of the Superintendent of Examinations is
guilty of any misconduct in the Examination Hall, other than the misconduct
within the meaning of the aforesaid sub-paras 31.1 to 31.6 of this Ordinance,
may be expelled by the Superintendent of Examinations for that course and
shall be reported to the Examination Committee by the Controller of
Examinations. The said Committee may, if satisfied that the facts alleged are
true, disqualify him/her from passing the Examination for that year.
                           
                           
   
                           </td> 
                        </tr>
                        <tr>
                        <td style="border-style:ridge; font-size:9px;">


                        
                        30.5    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           The candidates shall maintain and observe strict discipline in and/or near the
Examination Centre/Hall and shall not indulge in any such act as
misbehaviour/nuisance which causes any obstruction and/or disturbance or
disruption in the conduct of Examination.  
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                        
                        31.8
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                                                   
                           Any candidate approaching an Examiner directly or indirectly or seeking ways
or means of bringing pressure to bear on the Examiner, so that higher marks
may be awarded to him/her than his/her answers justify or attempting to
influence the Controller of Examinations or any person employed in his office
for the same purpose shall be deemed to have used unfair means. Such a case
shall be reported to the Examination Committee by the person concerned
through the Controller of Examinations. The Examination Committee may, if
satisfied that the facts alleged are true, disqualify the candidate from passing
that Examination and debar him/her from appearing at any Examination for a
period not less than one year.
                           
   
                           </td> 
                        </tr>
                        
                        <tr>
                        <td style="border-style:ridge; font-size:9px;">


                        
                        30.6    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           No candidate shall be allowed to leave the Examination Hall, until an hour has
elapsed after the distribution of the Question Paper.  
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                        
                        31.9    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           
                           Any candidate found guilty of seeking ways and means or harassing or
pressurizing or using or threatening to use force to make any Superintendent of
Examinations or Invigilator or any Official of the University desist from his
duties relating to the conduct of Examination shall be deemed to have used
unfair means and indulged in gross misconduct. Such a case shall be reported to
the Examination Committee by the person concerned through the Controller of
Examinations. The Examination Committee may, if satisfied that the facts
alleged are true, disqualify the candidate from passing that Examination and/or
expel hin/her from the University and declare him /her to be not a fit and proper
person to be admitted to any future Examination of the University.
                           
   
                           </td> 
                        </tr>
                        
                        <tr>
                        <td style="border-style:ridge; font-size:9px;">


                        
                        30.7    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           No candidate shall leave his/her place or go out of the Hall without the
permission of the Invigilator, unless he /she has handed over his/her answer book
to the Invigilator concerned.   
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                        
                        31.10    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           
                           Any candidate who has been punished under Sub-Paras 31.4 to 31.9 above,
shall not be admitted to any programme of study as a Regular Student. Such a
student may be allowed to appear at the next Annual Examination only in
which he/she is entitled to appear as an Ex- Student after the expiry of the
period of punishment.
                            
   
                           </td> 
                        </tr>
                        
                        <tr>
                        <td style="border-style:ridge; font-size:9px;">


                        
                        30.8    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           If a candidate desires to go out of the Examination Hall for a while, a reliable
person shall be sent with him/her to see that he/she does not communicate with
any person or use unfair means for answering the Question Paper.   
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                        
                        31.11    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           
                           In case, a person, who is not a bonafide candidate, is found to be taking an
Examination on behalf of a bonafide candidate, it will be assumed that
impersonation is being done at the instance and with the connivance of the
bonafide candidate and action against such person and such bonafide candidate
would be taken as under:
                            
   
                           </td> 
                        </tr>
                            
                            <tr>
                        <td style="border-style:ridge; font-size:9px;">


                        
                        30.9    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           As soon as the time prescribed for the Question Paper expires, the candidates
shall have to hand over their answer books to the Invigilator concerned.    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                        
                        (i)    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           
                           
                           The bonafide candidate, who did not take the Examination
himself/herself shall be debarred from pursuing any programme of study
or from appearing at any Examination of the University in future.
                            
   
                           </td> 
                        </tr>
                        
                        <tr>
                        <td style="border-style:ridge; font-size:9px;">


                        
                        30.10    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           A candidate appearing at an Examination shall give a specimen signature for
purpose of identification, if asked by the Superintendent of Examinations or the
lnvigilator in the Examination Hall.     
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                        
                        (ii)   
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                            
   In case, the person, who has impersonated the bonafide candidate, is a
student of the University, he/she shall be debarred from taking any
Examination of the University in future.
   
   
                           </td> 
                        </tr>
                        
                        
                        <tr>
                        <td style="border-style:ridge; font-size:9px;">


                        
                        31.1    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           No candidate shall bring with him/her in the Examination Hall any book, paper,
notes or other materials which may be used by him/her in connection with the
Examination, nor shall he/she communicate to or receive from any other
candidate or person any information in the Examination Hall.     
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                        
                        (iii)   
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                            
  If the person, who has impersonated the bonafide candidate, is not a
student of the University, he/she may be handed over to the Police for
appropriate action.                  
                    
                            
   
                           </td> 
                        </tr>
                        
                        <tr>
                        <td style="border-style:ridge; font-size:9px;">


                        
                        31.2    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           No candidate shall note or write anything on the blotting paper or Question
Paper or on any other object/material, except the answer book supplied to
him/her.     
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                        
                        31.12
                        </td>
                           <td style="border-style:ridge; font-size:9px;">


                           
   In case, a candidate is appearing at the Examination for improvement of
Division/Percentage of Marks and is found to be using unfair means, the result
of his/her Examination in the Course(s) in which he/she has already appeared,
would also be cancelled, in addition to the action that might be taken against
him/her for using unfair means, while reappearing for improvement of his/her
Grade/Division/ Percentage of Marks.
                               
                           </td> 
                        </tr>
                        
                        <tr>
                        <td style="border-style:ridge; font-size:9px;">


                        
                        31.3    
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                           No candidate shall assist or receive assistance from any other candidate or
person at an Examination or make use of any dishonest or unfair means in
connection with the Examination.     
                           </td>
                           <td style="border-style:ridge; font-size:9px;">


                        
                        31.13
                        </td>
                           <td style="border-style:ridge; font-size:9px;">


                           Any punishment imposed on the erring student shall be following due
consideration of the defence presented by him/her.  
   
                           </td> 
                        </tr>
                            
                        </table>
                    </td>
                </tr>
            </table>
            </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>
