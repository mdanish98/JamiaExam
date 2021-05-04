<?php
include("connection2.php");
session_start(); 
$x = $_SESSION['enrol'];
 
if(!isset($x))
	{
	header("location:ExaminationResults.php");
	exit();
	}
?> 
<?php
$sem_exam1=$_SESSION['sem_exam1'];
$exam1_id=$_SESSION['enrol']; 
$exam2_id =$_SESSION['exam2_id'];
?>
<!DOCTYPE html>
<html>
    <title>Students info</title>
    <link rel="shortcut icon" href="favicon.ico" >
<link rel="shortcut icon" href="http://jmi.ac.in/images/jamia.ico" type="image/x-icon" />
<link href="pico.css" type="text/css" rel="stylesheet" />
<script language="JavaScript" type="text/JavaScript" src="/JOLF/javaScript/Administration/Admin.js"></script>
<script language="JavaScript" type="text/JavaScript" src="jquery2.js"></script>
<link rel="stylesheet" href="styles.css" type="text/css"/>
<script src="utils.js" type="text/javascript"></script>
</head>



<body> 


<!--  Start Main Wrapper  -->

<div id="wrapper">

<!--  Start Top Header  -->
<div class="top-header">
<!--  Date and Time  -->
<div class="date">

<span id="clock"></span>
<!--  Date and Time  -->
&nbsp;Welcome Guest | <a href="http://jmi.ac.in/onlineclassroom/index.php" target="_blank">Sign In</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<script type="text/javascript">
   var date = new Date(); 
   var month = date.getMonth() + 1;
   var day = date.getDate();
   var year = date.getFullYear()
   var hours = date.getHours();
   var minutes = date.getMinutes();
   document.write(day + "/" + month + "/" + year + "     " + hours + ":" + minutes);
</script>
  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="span">Language :  </span><a href="http://jmi.ac.in/" style="color:#45916B;font-weight: bold;">English </a>| <a href="http://jmi.ac.in/construction.html" target="_blank">Hindi</a>
</div>
<div class="fontSize"><span class="span">Font Size : </span>
<a id="jfontsize-default" class="fontfocus" style="cursor: pointer;">A</a>| 
<a id="jfontsize-minus" class="fontnormal" style="cursor: pointer;">A-</a>| 
<a id="jfontsize-plus" class="fontnormal" style="cursor: pointer;">A+</a> 
</div>
&nbsp;&nbsp;


<div class="contactus"><a href="http://jmi.ac.in/feedback" title="Website Feedback">Website Feedback</a>
&nbsp;
<a href="http://jmi.ac.in/sitemap"><img src="sitemap-icon.png" border="0" title="Sitemap">
</a>
</div>

<div class="clear"></div>
</div>
<!--  End Top Header  -->

<!--  Start Header  -->
<div class="header">
	
<div class="logo"><a href="http://jmi.ac.in/"><img src="logo.png" border="0"></a></div>
<div class="header-right">
<div class="menu" >

<div class="tab_selected"><a href="http://jmi.ac.in/">Home</a></div>
<div class="tab"><a href="http://jmi.ac.in/aboutjamia">About Jamia</a></div>
<div class="tab"><a href="http://jmi.ac.in/studyatjamia">Study at Jamia</a></div>
<div class="tab"><a href="http://jmi.ac.in/bulletinboard">Bulletin Board</a></div>
<div class="tab"><a href="http://jmi.ac.in/universityreport/annual">University Reports</a></div>

</div>
<div class="search">
<form class="search-form" action="http://www.google.com/cse" name="frmSearch">
      
    <input type="hidden" name="ie" value="UTF-8">
    <input id="custom" name="cx" type="radio" value="010200137612988349174:pk1grjzjces" checked="checked">Jamia
    <input id="www" name="cx" type="radio" value="!010200137612988349174:pk1grjzjces">Web<br>
			
    <input type="hidden" name="cof" value="FORID:13;AH:left;CX:JAMIA;L:http://www.google.com/intl/en/images/logos/custom_search_logo_sm.gif;LH:30;LP:1;KMBOC:%23336699;">	  
    <input type="text" name="q" size="20" id="txtq" class="textbox">
    <input name="txtq" type="button" class="search-button" onclick="searchJamia()">
    <br><a href="http://jmi.ac.in/Jamia%20Online%20Fee%20Payment/paymentForm.html#" class="hover"></a><br>
    <input type="hidden" name="ie" value="UTF-8">
</form> 
</div>
</div>
<div class="clear"></div>
</div>
<!--  End Header  -->



<div class="clear"></div>


<!--  Start Content  -->
<div class="content">

<!-- form starts -->
<div id="mainContent" style="background-color: #ffffff; margin-left:1em; margin-right:1em;" align="left">
<div class="">
<div class="headline" style="color:#060">Result Status</div>

<!-- Download Terms & Conditions starts -->
<div class="DownloadPDF">
<div class="clear"></div>
</div>
<!-- Download Terms & Conditions starts -->
</div>

<div class="clear"></div>
 <table width="960" height="26" cellpadding="2" cellspacing="0" align="center" style="background-color:#3CC; border-radius:5px;">
    <tr>
      <td width="144" height="24" ><div class="1tab"><a href="http://localhost/JamiaExam/ExaminationResults.php"><input type="button" value="Result & Marksheet" name="rm"></a></div>
</td>
      <td width="147"><div class="1tab"><a href="http://localhost/JamiaExam/Resultsheets/Resultsheets.php"><input name="rs" type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Result sheets&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"></a></div>
      <td width="147"><div class="1tab"><a href="http://localhost/JamiaExam/CourseCurriculum/coursecurriculum.php"><input type="button" value="&nbsp;Course Curriculum&nbsp;&nbsp;" name="cc"></a></div>
</td>
      <td width="504"><div class="1tab"><a href="http://203.190.132.18/StudentStatusNResult/default.aspx"><input type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;Student Log-in&nbsp;&nbsp;&nbsp;&nbsp;" name="cc"></a></div>
</td>
    </tr>
  </table>
<div class="clear"></div>
           <!--hyperlinks tab-->
<br/><br/>

  
  
        
<div class="terms_condition_form">
        
<a class="submit2" href="http://203.190.132.18/WebMarkSheet/ReportViewer.aspx?Enrollment=
<?php echo $exam1_id; ?>
&ClassSID=
<?php echo $exam2_id; ?>
&ExamName=
<?php echo $sem_exam1; ?>
">
<br><br>
</a>
<!--The Exam name goes here-->
<?php
$query="select distinct FirstName,LastName,FatherName,EXAMCAT,Roll,ClassResult,ClassName,ExamName from [studentResultStatus] where Enrollment='$exam1_id' and ExamID='$sem_exam1' and ClassSID='$exam2_id'";
$run=sqlsrv_query($con,$query);
while($row=sqlsrv_fetch_array($run,SQLSRV_FETCH_ASSOC))
{
?>
<h1 align="center" style="font-size:16px"><?php echo $row['ClassName']  ?></h1>
<h2 align="center" style="font-size:14px"><?php echo $row['ExamName']  ?></h2><br/>
<table width="581" cellspacing="0" cellpadding="2" id="tab2">
  <tr>
    <td width="243" height="33"><b>Name:</b></b></td>
    <td width="310" height="33"><?php	echo $row['FirstName']." ".$row['LastName']; ?>
</td>
  </tr>
  <tr>
    <td width="243" height="33"><b>Father's Name:</b></td>
    <td width="310" height="33"><?php echo $row['FatherName']; ?>
</td>
  </tr>
  <tr>
    <td width="243" height="33"><b>Roll No:</b></td>
    <td width="310" height="33"><?php	echo $row['Roll']; ?></td>
  </tr>
  <tr>
    <td width="243" height="33"><b>Enrollment no:</b></td>
    <td width="310" height="33"><?php echo  $exam1_id; ?></td>
  </tr>
  <tr>
    <td width="243" height="33"><b>Category:</b></td>
    <td width="310" height="33"><?php	echo $row['EXAMCAT']; ?></td>
  </tr>
  <tr>
    <td width="243" height="33"><b>Result:</b></td>
    <td width="310" height="33"><?php echo $row['ClassResult']; ?></td>
  </tr>
  <tr><?php }?>
    <td height="50" colspan="2" align="center"><a class="submit2" href="http://203.190.132.18/WebMarkSheet/ReportViewer.aspx?Enrollment=
<?php echo $exam1_id; ?>
&ClassSID=
<?php echo $exam2_id; ?>
&ExamName=
<?php echo $sem_exam1; ?>
" target="_blank">
      <input type="button" name="submit2" class="submit2" id="submit3" value="View Marksheet">
    </a></td>
    <td width="14">&nbsp;</td>
  </tr>
</table>

        
        <p align="center" class="mymessage" style="color:#ffff99 "> </p>
          
        <div id="form" align="center">
      
        </div>
</div>
<div class="clear"></div>


<div style="background-color:#45916b; padding:3px 0;">
                    <p align="center" class="pageSubHeading" style="color: #ffffff; margin:0; padding:0; font-weight:bold; font-size:12px; text-align:left;">&nbsp;
                        Instructions:Click on the View Marksheet Button to see your marksheet.</p>                                        
</div> 
<div class="footer" align="center">
<div>
Page created by Ghazanfar Danish , Shahbaz , Talha (DCS-5th Sem-2014)
<br/>
 © 2014&nbsp;Jamia Millia Islamia. All rights reserved</div>
       
</body></html>
<?php
session_destroy();
?>