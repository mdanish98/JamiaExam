<?php
session_start(); 
include('../webusercon.php');
//session check starts
echo "enroll = ".$enroll = $_SESSION['enroll'];
echo "cat = ".$cat = $_SESSION['cat'];
echo "part = ".$part = $_SESSION['part'];
if(!isset($enroll))
	{
	header("location:../Studentlog.php?z=1");
	exit();
	}
	echo 'rollid after post = '.$roll_id = $_SESSION['roll_id'] ;

//session check ends
//form filled check starts
//$enrollcat = $enroll.$part;
//$sql = "SELECT RollID FROM RegisterExam where RollID='$roll_id'";
$sql = "select RollID from RollList where Enrollment='$enroll' and ExamID In (select ExamID from Exam where getdate() between RegOpenDate and RegCloseDate)";
$run = sqlsrv_query($con,$sql);
$rowcount = sqlsrv_has_rows($run);
$flag = 0;
while($row = sqlsrv_fetch_array($run,SQLSRV_FETCH_ASSOC))
{
	$rid = $row['RollID'];
$sql2 = "SELECT RollID FROM RegisterExam WHERE RollID='$rid'";
$run2 = sqlsrv_query($con,$sql2);
$rowcount2 = sqlsrv_has_rows($run2);
if($rowcount2>0)
{
	$flag = $flag + 1; 
}
}//while loop ends
//form filled check ends
if($flag == 0)
{
	header("Location: Registration.php?q=4");
	exit();
}
	
	
	
	
$stid = $_SESSION['stid'];
$name = $_SESSION['name'];
$dob = $_SESSION['dob'];
$examid = $_SESSION['examid'];
$cat = $_SESSION['cat'];
$course = $_SESSION['course'];
$partm = $_SESSION['part'];
$strlenn = strlen($course);
$partt = substr($course, 0, $strlenn-1);
$newcourse = $partt." ".$partm;
$sessionn = $_SESSION['sessionn'];
$acadname = $_SESSION['acadsessname']."-".$examid;



?>
<!DOCTYPE html>
<html>
    <title>Home Page</title>
    <link rel="shortcut icon" href="favicon.ico" >
<link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon" />
<link href="../../pico.css" type="text/css" rel="stylesheet" />
<script language="JavaScript" type="text/JavaScript" src="../../jquery2.js"></script>
<link rel="stylesheet" href="../../styles.css" type="text/css"/>
<script src="../../utils.js" type="text/javascript"></script>
<!--<SCRIPT LANGUAGE="JavaScript">

function popup(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=1280,height=1024');");
}

</script>
-->
<script type="text/javascript" src="../../jquery-1.2.6.js"></script>
<!-- window close validation starts -->

<script>
function confirmation() {
    if (confirm("Are you sure you want to leave this page!") == true) {
        return true;
    } else {
        return false;
    }
}
</script>

<!-- window close validation ends -->
<!-- Disabled alert start-->
<script type="text/javascript">
function disabledbtn()
{
	        var error = "Your form is not approved yet. Please retry after some time!\n\n";
            alert(error);
            return false;
}
</script>
<!-- Disabled alert end-->

<!-- Function to check if radio button is selected or not-->

</head>



<body> 

<?php
    $q = $_GET['q'];
    if($q==1)
	{
		echo "<script type='text/javascript'> alert('Your form is not approved yet'); </script>";
	}
	if($q==2)
	{
		echo "<script type='text/javascript'> alert('Please select a program.'); </script>";
	}
	if($q==3)
	{
		?>
		<script> 
var msg = "Dear <?php echo $enroll;?>\n\n"; 
msg +=  "You have successfully made your payment\n\n"; 	
msg += "Please Download your admit card if approved\n\n"; 
alert(msg); 
</script>
<?php
	}
	?>
    <?php
    if($q==4)
	{
		?>
		<script> 
var msg = "Dear <?php echo $enroll;?>\n\n"; 
msg +=  "Your transaction was failed\n\n"; 	
msg += "Please retry after some time.\n\n"; 
alert(msg); 
</script>
<?php
	}
	if($q == 5)
	{
		echo "<script type='text/javascript'> alert('Your form has been succesfully submitted!\n\n It will take 24 hours to approve.'); </script>";
	}	?>
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
<a href="http://jmi.ac.in/sitemap"><img src="../../sitemap-icon.png" border="0" title="Sitemap">
</a>
</div>

<div class="clear"></div>
</div>
<!--  End Top Header  -->

<!--  Start Header  -->
<div class="header">
	
<div class="logo"><a href="http://jmi.ac.in/"><img src="../../logo.png" border="0"></a></div>
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
<div class="headline" style="color:#060;">Home Page</div>

<!-- Download Terms & Conditions starts -->
<div class="DownloadPDF">
<div class="clear"></div>
</div>
<!-- Download Terms & Conditions starts -->
</div>

<div class="clear"></div>
        
<table width="960" height="26" cellpadding="2" cellspacing="0" align="center" style="background-color:#45916b; border-radius:5px;">
    <tr>
      <td width="100" height="24" ><div class="1tab">
      <a href="HomePage.php">
        <input type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;Home Page&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" name="cc">
      </a>
      
      
      </td><td width="100">
      
      <a href="personalinfo1.php"><input type="button" value="&nbsp;&nbsp;&nbsp;Personal info&nbsp;&nbsp;&nbsp;" name="rm" onClick="return confirmation(this)"></a>
      
      </div>
</td>
      <td width="100"><div class="1tab">
      <a href="coursesconstruction.php"><input name="rs" type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Courses&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" onClick="return confirmation(this)">
      </a>
      </td>
      </div>
      <td width="100"><div class="1tab">
      <a href="Registration.php"><input name="rs" type="button" value="Apply for another Program" onClick="return confirmation(this)">
      </a>
      
      </div>
</td>
<td align="center">


<?php echo "<span style='color:white; font-size:12px;'>Welcome " . $enroll."</span>";   ?> 
</td>    
<td align="center">
<?php echo "<span style='color:white; font-size:12px;'>";  
echo date('d-M-Y');
echo " [ ".date("h:i:sa")." IST ]</span>";

?> 
</td>    

<td align="justify">
<?php  echo "<a href='logout.php' style='text-decoration: none; color:white; font-size:12px; '><div id='log'>[ Sign-out ]</div></a>";  ?> 
</td>    

    </tr>
  </table>
<div class="clear"></div>
           <br/><br/>

  
        
        <div class="terms_condition_form">
<!-- Main content starts onchange="return -->
&emsp;<p> Dear <b><?php echo $name; ?> </b>
<br/>
<br/>
<p> Please follow the instructions given below. </p>
<p>
1.After approval of your admit card it will appear below.
<br/>
2.Your form will be approved within 24 hours.List will be appear below and you can download your admit card by selecting the appropriate program and clicking on <b>"Download Admit Card"</b>.
<br/>
3.If a student fill form for <b>CR/DI</b>, he/she should have to pay the required examination fee.
<br/>
4.The pending payments list will also appear below with the title <b>"Pending Payments"</b> select the program and click on <b>"Pay Examination Fee"</b> to pay the fee online.
<br/>
5.Your form (incase of <b>CR/DI</b>) will not be considered for approval,if you do not pay the examination fee.
<br/>
6.After printing the admit card take the printout and stamp it with signature of either <b>Dean/Principal/Director</b> of the respective department.
<br/>
7.If your form is not approved after 24 hours, mail to <b>COE-JMI</b> at <span style="color:#006;">ceojamia@gmail.com</span>.
<br/>
<br/></p>
<p align="center">
</p>
<form name="formsubmit" action="AdmitCard.php" method="post" target="_blank">

<?php
$sqlquery = "SELECT Enrollment,CAT,ClassName,EnrollCat,FormApproved,FormFilled FROM registeration where Enrollment='$enroll' And FormApproved=1 order by ClassName ASC;";
$runsql = mysql_query($sqlquery);
$rowcountsql = mysql_num_rows($runsql);
if($rowcountsql>0)
{

?>
<h4 align="center" style="color:#060;">Download Admit Card</h4>
<hr/>
<br/><br/>
<table style="border-style:ridge;" width="600" align="center" cellpadding="2" cellspacing="2">
<tr>
<th style=" border-bottom:thin; border-bottom-color:#000; background-color:#090; color:#FFF; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-top: solid black 1.0pt; border-right: solid black 1.0pt;">
Select
</th>
<th style="background-color:#090; color:#FFF; border-bottom:thin; border-bottom-color:#000; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-top: solid black 1.0pt; border-right: solid black 1.0pt;">
Program Name
</th>
<th style=" background-color:#090; color:#FFF; border-bottom:thin; border-bottom-color:#000; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-top: solid black 1.0pt; border-right: solid black 1.0pt;">
Category
</th>
</tr>
<?php

while($rowsql = mysql_fetch_array($runsql))
{
	?>
    <tr>
    <td align="center" style="border-style:ridge; color:#000;">
    <input type="radio" name="admit" id="admit" value="<?php echo $rowsql['EnrollCat']; ?>" />
    </td>
    <td style="border-style:ridge;  color:#000;">
    <?php echo $rowsql['ClassName']; ?>
    </td>
    <td style="border-style:ridge; color:#000;">
    <?php 
	
	if($rowsql['CAT']==1)
{
echo "Regular"; 
}
else if($rowsql['CAT']==2)
{
	echo "Ex-Regular";
}
else if($rowsql['CAT']==3)
{
	echo "CR/DI";
}
else if($rowsql['CAT']==4)
{
	echo "Compartment";
}
	 ?>
    </td>
    
    </tr>
    <?php
}
?>
<tr>
<td align="center" colspan="3" style=" border-bottom:thin; border-bottom-color:#000; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-top: solid black 1.0pt; border-right: solid black 1.0pt;">
<input type="submit" name="btndownloadac" value="Download Admit Card" id="btndownload">
</td>
</tr>
</table>
<?php
}
?>
</form>

<br/><br/>
<!-- payment table -->

<form name="payform" action="Payment/Payment.php" method="post">

<?php
$sqlquery1 = "SELECT Enrollment,CAT,ClassName,EnrollCat,FormApproved,FormFilled FROM registeration where Enrollment='$enroll' And CAT <> 1 And BookingStatus = 0 order by ClassName ASC;";
$runsql1 = mysql_query($sqlquery1);
$rowcountsql1 = mysql_num_rows($runsql1);
if($rowcountsql1>0)
{

?>
<h4 align="center" style="color:#060;">Pending Payments</h4>
<hr/>
<br/><br/>
<table style="border-style:ridge;" width="600" align="center" cellpadding="2" cellspacing="2">
<tr>
<th style=" border-bottom:thin; border-bottom-color:#000; background-color:#090; color:#FFF; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-top: solid black 1.0pt; border-right: solid black 1.0pt;">
Select
</th>
<th style="background-color:#090; color:#FFF; border-bottom:thin; border-bottom-color:#000; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-top: solid black 1.0pt; border-right: solid black 1.0pt;">
Program Name
</th>
<th style=" background-color:#090; color:#FFF; border-bottom:thin; border-bottom-color:#000; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-top: solid black 1.0pt; border-right: solid black 1.0pt;">
Category
</th>
</tr>
<?php

while($rowsql1 = mysql_fetch_array($runsql1))
{
	?>
    <tr>
    <td align="center" style="border-style:ridge; color:#000;">
    <input type="radio" name="pay" id="pay" value="<?php echo $rowsql1['EnrollCat']; ?>" />
    </td>
    <td style="border-style:ridge;  color:#000;">
    <?php echo $rowsql1['ClassName']; ?>
    </td>
    <td style="border-style:ridge; color:#000;">
    <?php 
	
	if($rowsql1['CAT']==1)
{
echo "Regular"; 
}
else if($rowsql1['CAT']==2)
{
	echo "Ex-Regular";
}
else if($rowsql1['CAT']==3)
{
	echo "CR/DI";
}
else if($rowsql1['CAT']==4)
{
	echo "Compartment";
}
	 ?>
    </td>
    
    </tr>
    <?php
}
?>
<tr>
<td align="center" colspan="3" style=" border-bottom:thin; border-bottom-color:#000; border-left: solid black 1.0pt; border-bottom: solid black 1.0pt; border-top: solid black 1.0pt; border-right: solid black 1.0pt;">
<input type="submit" name="btnpayac" value="Pay Examination Fee" id="btnpay">
</td>
</tr>
</table>
<?php
}
?>
</form>



 <!-- Main content ends -->
</div>

<div class="clear"></div>
<div style="background-color:#45916b; padding:3px 0;">
                    <p align="center" class="pageSubHeading" style="color: #ffffff; margin:0; padding:0; font-weight:bold; font-size:12px; text-align:left;">&nbsp;
                        Instructions: Enter the Enrollment number if you dont know your Enrollment number please press search button inorder to know your Enrollment number.</p>                                        
</div> 
<div class="footer" align="center">
<div>
Page created by Ghazanfar Danish , Shahbaz , Talha (DCS-5th Sem-2014)
<br/>
 © 2014&nbsp;Jamia Millia Islamia. All rights reserved</div>
       
</body></html>